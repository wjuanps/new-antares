<?php

namespace App\Controllers;

use App\Models\Twitter;

class SentimentController {

    public function index() {
        $string = "“Macron, Menina Greta, Leo di Caprio e toda a gente de Hollywood anunciam o desembarque na Austrália para ajudar no… https://t.co/ex7oMaisyE";

        // preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $string, $match);

        $string = preg_replace('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', '', $string);

        dd($string);
        return view('sentiment-analysis');
    }

    public function getTweets() {
        $q = trim(strip_tags(filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)));

        $tweets = Twitter::search($q, 5);

        die(json_encode(array('tweets' => $tweets)));
    }
}
