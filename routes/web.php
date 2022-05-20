<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web']], function(){

//Action
	Route::get('/','UserController@index');
	Route::get('home','UserController@home');

	Route::get('/login','UserController@index');
	Route::post('login','UserController@login');

	Route::get('/new_post','UserController@new_post');
	Route::post('/upload_new_post','UserController@upload_new_post');
	Route::get('/delete','UserController@delete');
	Route::get('/edit','UserController@edit');
	Route::post('/update','UserController@update');
	
	Route::get('logout','UserController@logout');
	
});


