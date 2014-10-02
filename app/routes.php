<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('/', function () {
    $data = Input::all();
    var_dump($data);
});

Route::get('/post-form', function () {
    return View::make('form');
});