<?php

namespace App\Controllers;

use App\Core\App;

class SentimentController {

    public function index() {
        $q = trim(strip_tags(filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)));

        return view('sentiment-analysis', compact('q'));
    }
}
