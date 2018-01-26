@extends('layouts.app')


@section('content')


<section  id="contenido_principal">

	

<div class="box box-primary box-gris">

     <div class="box-header">
        <h4 class="box-title">Usuarios</h4>	        
        <form   action="{{ url('buscar_doctor') }}"  method="post"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
					<span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar" >
					</span>

				</div>
						
        </form>


		<div class="margin" id="botones_control">
              <a href="{{url('/form_nuevo_doctor')}}" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar doctor</a>
              <a href="{{ url("/listado_Doctores") }}"  class="btn btn-xs btn-primary" >Listado Doctores</a> 
              <a href="{{url('/form_nuevo_perfil')}}" class="btn btn-xs btn-primary" >Asignar Perfil</a> 
              <a href="{{url('/form_nuevo_permiso')}}" class="btn btn-xs btn-primary" onclick="cargar_formulario(3);" >Permisos</a>                                 
		</div>

    </div>

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped" cellspacing="0" width="100%">
				<thead>
						<tr>    <th>codigo</th>
								<th>Nombre</th>
								<th>Direccion</th>
							    <th>Telefono</th>
							    <th>Celular</th>
							    <th>Cedula</th>
						</tr>
				</thead>
	    <tbody>

	    @foreach($doctores as $doctor)
		<tr role="row" class="odd">
			
			<td>{{ $doctor->id }}</td>
			<!--
			<td><span class="label label-default">
             
            
           

             -</span>
			</td>
			-->

			<td>{{ $doctor->user->name }}</td>
			<td>{{ $doctor->direccion }}</td>
			<td>{{ $doctor->telefono }}</td>
			<td>{{ $doctor->celular }}</td>
			<td>{{ $doctor->cedula }}</td>
			<td>
			<a href="/form_editar_doctor/{{ $doctor->id }}"  style="display:block">editar</a>

			<a href="/form_borrado_doctor/{{ $doctor->id }}"  style="display:block">borrar</a>
			</td>
		</tr>
	    @endforeach



		</tbody>
		</table>

	</div>
</div>




{{ $doctores->links() }}

@if(count($doctores)==0)


<div class="box box-primary col-xs-12">

<div class='aprobado' style="margin-top:70px; text-align: center">
 
<label style='color:#177F6B'>
              ... no se encontraron resultados para su busqueda...
</label> 

</div>

 </div> 


@endif

</div></section>
@endsection