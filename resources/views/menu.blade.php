@extends('layouts.app')

@section('content')
<div class="cover-container pb-5">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading"> <strong>MENÚ</strong></h1>
        <p>
        	<a href="/medico" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Crear Médico</a>
        	<a href="/secretaria" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Crear Secretaria/o</a>     
        </p>
    </div>
</div>
@endsection('content')