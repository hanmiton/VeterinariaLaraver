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
//controlador de paginas
Route::get('/', 'PagesController@home');

Route::get('/medicos', 'PagesController@medico');

//medicos
Route::get('/medicos/{medico}', 'MedicosController@show');

Route::post('/medicos/create', 'MedicosController@create')->middleware('auth');

//controladoresmensajes
Route::get('/messages/{message}', 'MessagesController@show');



Auth::routes();
//username 
Route::get('/auth/facebook', 'SocialAuthController@facebook');

Route::get('/auth/facebook/callback', 'SocialAuthController@callback');

Route::post('/auth/facebook/register', 'SocialAuthController@register');


Route::get('/messages', 'MessagesController@search');

Route::group(['middleware' => 'auth'], function(){
	Route::post('/{username}/dms', 'UsersController@sendPrivateMessage');
	Route::get('/conversations/{conversation}', 'UsersController@showConversation');
	Route::post('/messages/create', 'MessagesController@create');
	Route::get('/{username}/follows', 'UsersController@follows');
	Route::post('/{username}/unfollow', 'UsersController@unfollow');
});



Route::get('/{username}/followers', 'UsersController@followers');

Route::post('/{username}/follow', 'UsersController@follow');


Route::get('/{username}', 'UsersController@show');

//provando ruta

Route::get('/{username}/acerca', 'UsersController@acerca');






/*
Route::get('/{username}/test', 'PagesController@test');

Route::get('/{username}/acerca', 'UsersController@acerca');

Route::get('/{username}/inicio', 'PagesController@inicio');

Route::get('/{username}/registro', 'PagesController@registro');

Route::get('/{username}/perfil', 'PagesController@perfil');

Route::get('/{username}/menu', 'PagesController@menu');

Route::get('/{username}/citas', 'PagesController@citas');


Route::get('/{username}/crearcliente', 'PagesController@crearcliente');

Route::get('/{username}/crearpaciente', 'PagesController@crearpaciente');

Route::get('/{username}/disponibilidad', 'PagesController@disponibilidad');
*/
//comentando


//Route::get('/home', 'HomeController@index')->name('home');
