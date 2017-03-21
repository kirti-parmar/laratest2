<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/youtube-rank-checker', ['as' => 'youtube-rank-checker', 'uses' => 'YoutubeRankCheckerController@getForm']);
Route::post('/youtube-rank-checker', ['as' => 'youtube-rank-checker', 'uses' => 'YoutubeRankCheckerController@postForm']);
