<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/games', function () {
    return view('games');
});

Route::post('/games', 'FirebaseController@index');

Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');