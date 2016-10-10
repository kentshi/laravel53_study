<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    $people = ['Taylor', 'Matt', 'Jeffrey'];
//    
//    return view('welcome', compact('people'));
//});

Route::get('about', 'PageController@about');

Route::get('/', 'PageController@home');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

DB::listen(function($query) {
//    var_dump($query->sql);
});