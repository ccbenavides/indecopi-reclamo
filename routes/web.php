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



Route::get('/seed', 'IndecopiController@reclamos');

Route::get('/', 'IndecopiController@index');
Route::get('/reclamos', 'IndecopiController@reclamos');
Route::get('/sanciones', 'IndecopiController@sanciones');
Route::get('/como-mejorar', 'IndecopiController@comoMejorar');

Route::get('/buscar-empresa', 'IndecopiController@buscarEmpresa');
Route::get('/mapa', 'IndecopiController@mapa');