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
Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['admin']], function() {
 

    Route::get('/admin', 'AdminController@index');



});

Route::group(['middleware' => ['employeur']], function() {
 

    Route::get('/employeur', 'EmployeurController@index');

Route::post('/home/{id}', 'EmployeurController@verif');


});


Route::group(['middleware' => ['chercheur']], function() {
 

    Route::get('/chercheur', 'ChercheurController@index');
Route::post('/home/{id}', 'ChercheurController@verif');



});
