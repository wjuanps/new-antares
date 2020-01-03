<?php

namespace App\Models;

use Abraham\TwitterOAuth\TwitterOAuth;

use App\Core\App;

class Twitter {
    
    public static function search($q, $count = 100, $resultType = 'mixed', $lang = 'pt') {
        try {
            $twitterOAuth = new TwitterOAuth(...App::get('config')['twitterOAuth']);

            $query = static::getQueryString($q, $count, $resultType, $lang);

            $tweets = $twitterOAuth->get('search/tweets', $query);

            return $tweets;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    protected static function getQueryString($q, $count, $resultType, $lang) {
        return array(
            "q"           => $q,
            "count"       => $count,
            "result_type" => $resultType,
            "lang"        => $lang,
        );
    }
}
