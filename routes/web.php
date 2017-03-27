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
Route::get('test','PagesController@test');
Route::get('signup','PagesController@getSignup');
Route::get('dash','PagesController@getDash');
Route::get('contact','PagesController@getContact');
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
Route::get('about','PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');


Auth::routes();

Route::get('/home', 'HomeController@index');
