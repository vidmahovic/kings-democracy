<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('key', function() {
    return str_random(32);
});

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('tweets', 'TweetController@index');
