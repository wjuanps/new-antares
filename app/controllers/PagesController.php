<?php

namespace App\Controllers;

class PagesController {

  public function home() {
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
