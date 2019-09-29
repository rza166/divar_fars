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
Route::get('/pagei','IndexController@pagei');
Route::get('/about','IndexController@about');
Route::get('/tamas','IndexController@tamas');
Route::get('/sabt','IndexController@sabt');
Route::get('/{city2?}','IndexController@view');
Route::post('/searchName','IndexController@searchName');
