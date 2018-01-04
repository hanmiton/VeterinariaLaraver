'<?php

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

Route::get('/messages/{message}', 'MessagesController@show');

Route::post('/messages/create', 'MessagesController@create')->middleware('auth');

Auth::routes();

Route::get('/auth/facebook', 'SocialAuthController@facebook');

Route::get('/auth/facebook/callback', 'SocialAuthController@callback');

Route::get('/{username}/follows', 'UsersController@follows');

Route::get('/{username}/followers', 'UsersController@followers');

Route::post('/{username}/follow', 'UsersController@follow');

Route::post('/{username}/unfollow', 'UsersController@unfollow');

Route::get('/{username}', 'UsersController@show');

Route::get('/test', 'PagesController@test');

Route::get('/acerca', 'PagesController@aboutUs');

Route::get('/inicio', 'PagesController@inicio');

Route::get('/registro', 'PagesController@registro');

Route::get('/perfil', 'PagesController@perfil');

Route::get('/menu', 'PagesController@menu');

Route::get('/citas', 'PagesController@citas');


Route::get('/crearcliente', 'PagesController@crearcliente');

Route::get('/crearpaciente', 'PagesController@crearpaciente');

Route::get('/disponibilidad', 'PagesController@disponibilidad');
//comentando


//Route::get('/home', 'HomeController@index')->name('home');
