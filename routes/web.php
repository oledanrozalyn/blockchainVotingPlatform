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

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/test', 'PagesController@getTest');
Route::get('/encrypt', 'PagesController@getEncrypt');


Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contactsubmit', 'MessagesController@contactsubmit');

Route::post('/loginsubmit', 'MessagesController@loginsubmit');

Route::post('/registersubmit', 'MessagesController@registersubmit');
