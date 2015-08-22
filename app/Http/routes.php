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

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ThemeController@index');
Route::any('dashboard', 'ThemeController@dashboard');

/*New post*/
Route::any('newpost', 'ThemeController@newpost');

/*Update post route*/
Route::any('edit/{id}', 'ThemeController@edit');

/*Update post route*/
Route::any('delete/{id}', 'ThemeController@delete');

/*Singl page */
Route::any('single/{id}', 'ThemeController@single');