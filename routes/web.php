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

//Auth::routes();
Route::prefix('auth')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

    Route::get('/google', 'Auth\LoginController@redirectToGoogle');
    Route::get('/google-callback', 'Auth\LoginController@handleGoogleCallback');

    Route::get('/twitter', 'Auth\LoginController@redirectToTwitter');
    Route::get('/twitter-callback', 'Auth\LoginController@handleTwitterCallback');

    Route::get('/facebook', 'Auth\LoginController@redirectToFacebook');
    Route::get('/facebook-callback', 'Auth\LoginController@handleFacebookCallback');

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::get('/home', 'HomeController@index')->name('home');
