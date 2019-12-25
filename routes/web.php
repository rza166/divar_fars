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
Route::post('/amlak','IndexController@amlak');
Route::post('/mashin','IndexController@mashin');
Route::post('/electriki','IndexController@electriki');
Route::post('/khane','IndexController@khane');
Route::post('/khadamat','IndexController@khadamat');
Route::post('/vasayel','IndexController@vasayel');
Route::post('/sargarmi','IndexController@sargarmi');
Route::post('/ejtemaei','IndexController@ejtemaei');
Route::post('/forkar','IndexController@forkar');
Route::post('/estekhdam','IndexController@estekhdam');

Route::post('/backAgahi','IndexController@backAgahi');
Route::post('/Mainagahi','IndexController@Mainagahi');
// Route::post('/saveMashin','IndexController@saveMashin');
// Route::post('/barghi','IndexController@barghi');
// Route::post('/home','IndexController@home');
// Route::post('/help','IndexController@help');
// Route::post('/vasile','IndexController@vasile');
// Route::post('/game','IndexController@game');
// Route::post('/ejtema','IndexController@ejtema');
// Route::post('/job','IndexController@job');
// Route::post('/estekhdam2','IndexController@estekhdam2');

Route::get('/sabtnahaei/{id}', 'IndexController@sabtnahaei' )->where('id', '[1-9]+');
Route::post('/uplod_img_pro', 'IndexController@uplod_img_pro');
Route::get('/{city2?}','IndexController@view');
Route::post('/searchName','IndexController@searchName');
Route::post('/searchAgahi','IndexController@searchAgahi');
Route::post('/modelshow','IndexController@modelshow');
