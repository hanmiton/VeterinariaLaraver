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


Route::get('/messages', 'MessagesController@search');

Route::get('/messages/{message}', 'MessagesController@show');



Route::get('/', 'PagesController@home');


//rutas logica
Route::get('/main', 'PagesController@main');

Route::get('/perfil', 'PagesController@perfil');

Route::get('/menu', 'PagesController@menu');

Route::get('/menuMedicos', 'PagesController@menuMedicos');



Route::get('/medicos', 'MedicosController@medicos');

Route::get('/medico', 'PagesController@medico');

//enfermedades medico

Route::get('/enfermedad/{medico}', 'PagesController@enfermedad');


//medicos
Route::get('/medicos/{medico}', 'MedicosController@show');

Route::post('/medicos/create', 'MedicosController@create')->middleware('auth');

Route::post('/enfermedad/create', 'MedicosController@createEnf')->middleware('auth');


Route::get('/addEspecialidad', 'MedicosController@createEspecialidad');


//controladoresmensajes

//pacientes


Route::get('/paciente', 'PagesController@paciente');


//secretaria
Route::get('/menusec', 'PagesController@secretaria');



Auth::routes();
//username 
Route::get('/auth/facebook', 'SocialAuthController@facebook');

Route::get('/auth/facebook/callback', 'SocialAuthController@callback');

Route::post('/auth/facebook/register', 'SocialAuthController@register');




Route::group(['middleware' => 'auth'], function(){
	Route::post('/{username}/dms', 'UsersController@sendPrivateMessage');
	Route::get('/conversations/{conversation}', 'UsersController@showConversation');
	Route::post('/messages/create', 'MessagesController@create');
	Route::get('/{username}/follows', 'UsersController@follows');
	Route::post('/{username}/unfollow', 'UsersController@unfollow');


	//roles

	Route::get('/home', 'HomeController@index');
    Route::get('form_nuevo_usuario', 'UsuariosController@form_nuevo_usuario');
    Route::get('form_editar_usuario/{id}', 'UsuariosController@form_editar_usuario');
    //get usuarios
    Route::get('/listado_usuarios', 'UsuariosController@listado_usuarios');
    Route::get('form_nuevo_usuario', 'UsuariosController@form_nuevo_usuario');
    Route::get('form_editar_usuario/{id}', 'UsuariosController@form_editar_usuario');
    //post usuarios
    Route::post('crear_usuario', 'UsuariosController@crear_usuario');
    Route::post('editar_usuario', 'UsuariosController@editar_usuario');
    Route::post('buscar_usuario', 'UsuariosController@buscar_usuario');
    Route::post('borrar_usuario', 'UsuariosController@borrar_usuario');
    Route::post('editar_acceso', 'UsuariosController@editar_acceso');
    //get doctores
    Route::get('/listado_doctores', 'DoctoresController@listado_doctores');
    Route::get('form_nuevo_doctor', 'DoctoresController@form_nuevo_doctor');
    Route::get('form_editar_doctor/{id}', 'DoctoresController@form_editar_doctor');
    Route::get('form_borrado_doctor/{iddoc}', 'DoctoresController@form_borrado_doctor');


    //post doctores
    Route::post('crear_doctor', 'DoctoresController@crear_doctor');
    Route::post('editar_doctor', 'DoctoresController@editar_doctor');
    Route::post('buscar_doctor', 'DoctoresController@buscar_doctor');
    Route::post('borrar_doctor', 'DoctoresController@borrar_doctor');


    //get doctores perfil
    Route::get('form_nuevo_perfil', 'DoctoresController@form_nuevo_perfil');


    //get pacientes

    //post doctores
    Route::post('crear_paciente', 'pacienteesController@crear_paciente');
    Route::post('editar_paciente', 'pacienteesController@editar_paciente');
    Route::post('buscar_paciente', 'pacienteesController@buscar_paciente');
    Route::post('borrar_paciente', 'pacienteesController@borrar_paciente');


    //get doctores perfil
    Route::get('form_nuevo_perfil', 'PacientesController@form_nuevo_paciente');

    //post pacientes

    Route::post('crear_rol', 'UsuariosController@crear_rol');
    Route::post('crear_permiso', 'UsuariosController@crear_permiso');
    Route::post('asignar_permiso', 'UsuariosController@asignar_permiso');
    Route::get('quitar_permiso/{idrol}/{idper}', 'UsuariosController@quitar_permiso');
    
    
    
    Route::get('form_nuevo_rol', 'UsuariosController@form_nuevo_rol');
    Route::get('form_nuevo_permiso', 'UsuariosController@form_nuevo_permiso');
    
    Route::get('confirmacion_borrado_usuario/{idusuario}', 'UsuariosController@confirmacion_borrado_usuario');
    Route::get('asignar_rol/{idusu}/{idrol}', 'UsuariosController@asignar_rol');
    Route::get('quitar_rol/{idusu}/{idrol}', 'UsuariosController@quitar_rol');
    Route::get('form_borrado_usuario/{idusu}', 'UsuariosController@form_borrado_usuario');
    Route::get('borrar_rol/{idrol}', 'UsuariosController@borrar_rol');

    //doctores


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
