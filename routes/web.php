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
Route::post('cards/{card}/notes', 'NotesController@store'); //CardsController@addNote

Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');
Route::delete('/notes/{note}', 'NotesController@destroy');

Route::get('users', 'UsersController@index');
Route::get('users/{user}', 'UsersController@show');

DB::listen(function($query) {
//    var_dump($query->sql);
});