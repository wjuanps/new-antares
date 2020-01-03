<?php

namespace App\Controllers;

use HybridLogic\Classifier\Basic;
use HybridLogic\Classifier;

class PagesController {

  public function home() {

    $classifier = new Classifier(new Basic);

    $classifier->train("positive", array(
      'The sun is hot',
      'It was a warm day in the sun',
      'This tea is hot!'
    ));

    $classifier->train("negative", array(
      'This ice is very cold!',
      'It\'s cold at night',
      'Ice formed on my at over night'
    ));

    // dd($classifier->classify('It was chilly last night'));

    return view('home');
  }

  public function about() {
    return view('about');
  }

  public function privacy() {
    return view('privacy');
  }

  public function terms() {
    return view('terms');
  }

  public function teste() {
    die(json_encode(array('name' => 'Juan', 'last' => 'Soares')));
  }
}
