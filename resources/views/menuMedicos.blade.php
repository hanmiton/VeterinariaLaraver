@extends('layouts.app')

@section('content')
<div class="cover-container pb-5">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading"> <strong>MENÚ</strong></h1>
        <p>
        	<a href="/medico" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Crear Medico</a>
            <a href="/medicos" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Ver Medicos</a>
            <a href="/editarMedico" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Editar Medico</a>
            <a href="/eliminarMedico" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Eliminar Medico</a>
        </p>
    </div>
</div>

@endsection('content')