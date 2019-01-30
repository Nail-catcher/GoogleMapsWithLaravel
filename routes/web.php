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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('googlemap', 'MapController@map');
Route::get('googlemap/direction', 'MapController@direction')->name('googlemap.direction');
Route::resource('dota', 'DotaController')->names(['index'=>'dota']);
Route::resource('dotb', 'DotbController')->names(['index'=>'dotb']);


