<img class="img-thumbnail" src="http://lorempixel.com/400/200/people/">
<p class="card-text">
	<!--<div class="text-muted">Nombre Medico: <a href="/{{ $medico->user->username}}">{{ $medico->user->name }}</a></div>-->
	<div class="text-muted">Direccion Medico:{{ $medico->direccion}}</div>
    <div class="text-muted">Telefono Medico:{{ $medico->telefono}}</div>
    <div class="text-muted">Celular Medico:{{ $medico->celular}}</div>
    <div class="text-muted">Direccion Medico:{{ $medico->direccion}}</div>
   	 <div class="text-muted">Codigo Veterinario Medico:{{ $medico->cod_vet}}</div>
     <div class="text-muted">enfermedades medico:{{ $medico->cod_enf}}</div>
   	 <div class="text-muted">Cedula Medico:{{ $medico->cedula}}</div>
   <a href="/medicos/{{ $medico->id }}"> Mas informacion medico</a>
    <a href="/enfermedad/{{$medico->id}}"" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Asignar Enfermedades</a>
    <a href="/perfil/{{ $medico->id }}"" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Asignar Perfil</a>
   <!--<a href="/addEspecialidad" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Añadir Especialidad</a>-->
</p>


<div class="card-text text-muted float-right">
	{{ $medico->created_at }}
</div>