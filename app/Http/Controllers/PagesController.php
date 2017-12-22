<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	

	public function home() 
	{

	    $messages = Message::all();

	    return view('welcome', [
	    	'messages' => $messages,
	    ]);
	    	
   	}

   	public function test() {
	    	//$messages = Message::all();
	    return view('test');
	    	
   	}

   	public function aboutUs()
   	{
   		return view('about');
   	}

   	public function inicio()
   	{
   		return view('inicio');
   	}

   	public function registro()
   	{
   		return view('registro');
   	}

   	public function perfil()
   	{
   		return view('perfil');
   	}

   	public function menu()
   	{
   		return view('menu');
   	}

   	public function citas()
   	{
   		return view('citas');
   	}

   	public function crearcliente()
   	{
   		return view('crearcliente');
   	}

   	public function crearpaciente()
   	{
   		return view('crearpaciente');
   	}

   	public function disponibilidad()
   	{
   		return view('disponibilidad');
   	}
}
