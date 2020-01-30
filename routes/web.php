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
    return view('home');
});

Route::resource('profile','UserController');
Route::resource('place','PlaceController');
Route::resource('locations','LocationController');
Route::resource('posts','PostController');
Route::resource('program','ProgramController');

Auth::routes();
Route::get('profile','UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('/home', 'HomeController@index')->name('home');
