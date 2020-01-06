<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('privacy', 'PagesController@privacy');
$router->get('terms', 'PagesController@terms');

$router->get('sentiment-analysis', 'SentimentController@index');
$router->get('get-tweets', 'SentimentController@getTweets');
