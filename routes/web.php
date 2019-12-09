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
    return redirect('/login');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/games', function () {
    return view('games');
});

Route::post('/games', 'FirebaseContriller@index');
Route::post('/teams', 'FirebaseContriller@teams');
Route::post('/users', 'FirebaseContriller@users');
Route::get('/games', 'FirebaseContriller@index')->name('games');
Route::get('/teams', 'FirebaseContriller@teams')->name('teams');
Route::get('/users', 'FirebaseContriller@users')->name('users');
Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');

