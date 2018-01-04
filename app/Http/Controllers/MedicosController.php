<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Http\Requests\CreateMedicoRequest;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    //
    public function show(Medico $medico)
    {
    	

    	return view ('medicos.show', [
    		'medico' => $medico,
    	]);

    }

    public function create(CreateMedicoRequest $request)
    {
    	$user = $request->user();

    	$medico = Medico::create([
    		'user_id' => $user->id,
    		'direccion' => $request->input('direccion'),
    		'telefono' => $request->input('telefono'),
    		'celular' => $request->input('celular'),
    		'cod_vet' => $request->input('cod_vet'),
    		'cedula' => $request->input('cedula'),
    	]);

    	return redirect('/medicos/'.$medico->id);
    }
}
