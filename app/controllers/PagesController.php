<?php

namespace App\Controllers;

use App\Core\App;

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
}
