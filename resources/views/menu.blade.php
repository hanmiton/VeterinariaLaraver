@extends('layouts.app')

@section('content')
<div class="cover-container pb-5">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading"> <strong>MENÚ</strong></h1>
        <p>
            <a href="/citas" class="btn btn-outline-white btn-lg mb-2 mr-2 ml-2">Citas Médicas</a>
            <a href="/reportes" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Reportes e Informes</a>
            <a href="/inventario" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Kardex</a>
            <a href="/pacientes" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Pacientes</a>
        </p>
    </div>
</div>
@endsection('content')