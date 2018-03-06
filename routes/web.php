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

Route::get('/index', function() {
	return view('users.pages.home');
});
Route::get('/rooms-tariff', function() {
	return view('users.pages.rooms.rooms-tariff');
});
Route::get('/introduction', function() {
	return view('users.pages.introduction');
});
Route::get('/gallery', function() {
	return view('users.pages.gallery');
});
Route::get('/contact', function() {
	return view('users.pages.contact');
});
Route::get('/room-details', function() {
	return view('users.pages.rooms.room-details');
});

Route::get('/multi-language', 'LanguageController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
