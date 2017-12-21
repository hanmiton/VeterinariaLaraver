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

Route::get('/', 'PagesController@home');

Route::get('/acerca', 'PagesController@aboutUs');

Route::get('/inicio', 'PagesController@inicio');

Route::get('/registro', 'PagesController@registro');

Route::get('/perfil', 'PagesController@perfil');

Route::get('/menu', 'PagesController@menu');

Route::get('/citas', 'PagesController@citas');


Route::get('/crearcliente', 'PagesController@crearcliente');

Route::get('/crearpaciente', 'PagesController@crearpaciente');

Route::get('/disponibilidad', 'PagesController@disponibilidad');