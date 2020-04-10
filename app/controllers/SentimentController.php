<?php

namespace App\Controllers;

use HybridLogic\Classifier\Basic;
use HybridLogic\Classifier;

use App\Models\Twitter;

class SentimentController {

  public function index() {
    // $string = "“Macron, Menina Greta, Leo di Caprio e toda a gente de Hollywood anunciam o desembarque na Austrália para ajudar no… https://t.co/ex7oMaisyE";

    // // preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $string, $match);

    // $string = preg_replace('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', '', $string);

    // dd($string);
    return view('sentiment-analysis');
  }

  public function getTweets() {
    $classifier = new Classifier(new Basic);
    $this->trainModel($classifier);

    $q = trim(strip_tags(filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)));

    $tweets = Twitter::search($q, 5);
    $tweets = array_map(function ($tweet) use ($classifier) {
      return (
        (object) array(
          "id"           => $tweet->id_str,
          "userName"     => $tweet->user->name,
          "userProfile"  => $tweet->user->screen_name,
          "profileImage" => $tweet->user->profile_image_url_https,
          "text"         => removeLink($tweet->text),
          "posted_at"    => $tweet->created_at,
          "groups"       => $classifier->classify(removeLink($tweet->text))
        )
      );
    }, $tweets->statuses);

    $positive = $this->getPolarity($tweets, 'positive');
    $negative = $this->getPolarity($tweets, 'negative');

    $percentPositive = $this->getPercent($positive);
    $percentNegative = $this->getPercent($negative);

    die(json_encode(array(
      'tweets' => $tweets,
      'result' => array(
        'sentiment'       => $this->getSentiment($positive, $negative),
        'positive'        => $positive,
        'negative'        => $negative,
        'percentPositive' => $percentPositive,
        'percentNegative' => $percentNegative
      )
    )));
  }

  protected function getPolarity($tweets, $sentiment) : float {
    $temp = array_reduce($tweets, function ($carry, $item) use ($sentiment) {
      return $carry += $item->groups[$sentiment];
    });

    return ($temp / count($tweets));
  }

  protected function getSentiment(float $positive, float $negative) : int {
    return ($positive > $negative) ? 1 : 0;
  }

  protected function getPercent($value) {
    return $value * 100;
  }

  protected function trainModel(Classifier $classifier) {
    $negatives = Twitter::getTweetsTrain(0);
    $positives = Twitter::getTweetsTrain(1);

    $classifier->train("positive", $positives);
    $classifier->train("negative", $negatives);
  }
}
