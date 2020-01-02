<?php

namespace App\Controllers;

use App\Models\Twitter;

class SentimentController {

    public function index() {
        return view('sentiment-analysis');
    }

    public function getTweets() {
        $q = trim(strip_tags(filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING)));

        $tweets = Twitter::search($q, 5);

        die(json_encode(array('tweets' => $tweets)));
    }
}
