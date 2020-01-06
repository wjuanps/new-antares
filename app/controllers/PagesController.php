<?php

namespace App\Controllers;

use App\Models\Twitter;

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
