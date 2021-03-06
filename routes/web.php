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

Route::get('/', 'FilmsController@index')->name('filmski izbornik');

Route::get('/filmovi/{letter}', 'FilmsController@showFilms')->name('filmovi.showFilms');

Route::get('/unos', 'FilmsController@unos')->name('unos');

Route::post('/unos', 'FilmsController@store');

Route::delete('/film/{film}', 'FilmsController@destroy')->name('film.destroy');

Route::get('/zanrovi', 'ZanrsController@zanr')->name('zanrovi');

Route::post('/zanrovi', 'ZanrsController@store');

Route::delete('/zanr/{zanr}', 'ZanrsController@destroy')->name('zanr.destroy');



