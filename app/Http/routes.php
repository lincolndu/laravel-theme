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
// Route::any('dashboard', 'ThemeController@dashboard');

/*New post*/
Route::any('newpost', 'ThemeController@newpost');
Route::any('comments', 'ThemeController@comments');

/*Update post route*/
Route::any('edit/{id}', 'ThemeController@edit');

/*Update post route*/
Route::any('delete/{id}', 'ThemeController@delete');

/*Singl page */
Route::any('single/{id}', 'ThemeController@single');

/*Gallery page*/
Route::any('gallery', 'ThemeController@gallery');

/*Gallery page*/
Route::any('blog', 'ThemeController@blog');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::post('auth/auth_edit{id}', 'ThemeController@authUpdate');
Route::get('home', 'ThemeController@index');


Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'ThemeController@dashboard']);
// Route::get('/', ['middleware' => 'auth', 'uses' => 'ThemeController@index']);
Route::get('author_update', function(){
	$data['author']=Auth::user();
	return view('auth.auth_edit', $data);
});