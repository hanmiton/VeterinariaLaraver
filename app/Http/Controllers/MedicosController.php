<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Http\Requests\CreateMedicoRequest;


use App\Enfermedad;
use App\Http\Requests\CreateEnfermedadRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

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


      public function createEnf(CreateEnfermedadRequest $request)
    {

        dd($request->user()->medico());
        $user = $request->user();

        $enfermedad = Enfermedad::create([
            'medico_id' => '1',
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);  

        return redirect('/medicos/'.$medico->id);
    }

           

    public function medicos() 
    {
      //Console::info('etamos aqui');
       //Console::info('mymessage');

        $medicos = Medico::latest()->paginate(10);

        return view('listMedicos', [
            'medicos' => $medicos,
        ]);
                    
    }


  
    
}
