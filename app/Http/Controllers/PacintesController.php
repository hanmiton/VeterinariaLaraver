<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Medico;
use App\Paciente;
use Illuminate\Support\Facades\Validator;


class DoctoresController extends Controller
{
 

public function form_nuevo_doctor(){
    //carga el formulario para agregar un nuevo usuario
   // $roles=Role::all();
    $users=User::all();
    return view("formulariosdoctor.form_nuevo_doctor")->with("users",$users);

}


public function form_nuevo_perfil(){
    //carga el formulario para agregar un nuevo usuario
   // $roles=Role::all();

    $doctores=Medico::all();
    return view("formulariosdoctor.form_nuevo_perfil")->with("doctores",$doctores);

}
/*

public function form_nuevo_rol(){
    //carga el formulario para agregar un nuevo rol
    $roles=Role::all();
    return view("formulariosdoctor.form_nuevo_rol")->with("roles",$roles);
}

public function form_nuevo_permiso(){
    //carga el formulario para agregar un nuevo permiso
     $roles=Role::all();
     $permisos=Permission::all();
    return view("formulariosdoctor.form_nuevo_permiso")->with("roles",$roles)->with("permisos", $permisos);
}

*/

public function listado_doctores(){
    //presenta un listado de usuarios paginados de 100 en 100
	$doctores=Medico::paginate(100);
	return view("listados.listado_doctores")->with("doctores",$doctores);
}





public function crear_doctor(Request $request){
    //crea un nuevo usuario en el sistema

    	 
    //dd($request);
	$doctor=new Medico;

	$doctor->direccion=strtoupper( $request->input("direccion") ) ;
	$doctor->telefono=strtoupper( $request->input("telefono") ) ;
    $doctor->celular=strtoupper( $request->input("celular") ) ;
	$doctor->cod_vet=$request->input("cod_vet");
	$doctor->cedula=$request->input("cedula"); 
    $doctor->user_id=$request->input("user_sel"); 

    if($doctor->save())
    {
      return view("mensajesdoctor.msj_doctor_creado")->with("msj","doctor agregado correctamente") ;
    }
    else
    {
        return view("mensajes.mensaje_error")->with("msj","...Hubo un error al agregar ;...") ;
    }

}





public function form_editar_doctor($id){
  
     $medico=Medico::find($id);
     $usuarios=User::all();
//    $roles=Role::all();
    return view("formulariosdoctor.form_editar_doctor")->with("doctor",$medico)->with("usuarios",$usuarios);
	                                                                            
}

public function editar_doctor(Request $request){
          
        

    $iddoctor=$request->input("id_doctor");
    $doctor=Medico::find($iddoctor);
    $doctor->direccion=strtoupper( $request->input("direccion") ) ;
    $doctor->telefono =strtoupper( $request->input("telefono") ) ;
    $doctor->celular=$request->input("celular");
    $doctor->cod_vet=$request->input("cod_vet");
    $doctor->cedula=$request->input("cedula");
   
    
   
	 
    if( $doctor->save()){
		return view("mensajesdoctor.msj_doctor_actualizado")->with("msj","doctor actualizado correctamente")
	                                                   ->with("iddoctor",$iddoctor) ;
    }
    else
    {
		return view("mensajesdoctor.mensaje_error")->with("msj","..Hubo un error al agregar ; intentarlo nuevamente..");
    }
}


public function buscar_doctor(Request $request){
	$dato=$request->input("dato_buscado");
	$doctores=Medico::where("name","like","%".$dato."%")->orwhere("apellidos","like","%".$dato."%")                                              ->paginate(100);
	return view('listados.listado_doctores')->with("doctores",$doctores);
      }




public function borrar_doctor(Request $request){

        $iddoctor=$request->input("id_doctor");
        $doctor=User::find($iddoctor);
    
        if($doctor->delete()){
             return view("mensajes.msj_doctor_borrado")->with("msj","doctor borrado correctamente") ;
        }
        else
        {
            return view("mensajes.mensaje_error")->with("msj","..Hubo un error al agregar ; intentarlo nuevamente..");
        }
        
     
}






public function form_borrado_doctor($id){
  $doctor=Medico::find($id);
  return view("confirmaciones.form_borrado_doctor")->with("doctor",$doctor);

}





}
