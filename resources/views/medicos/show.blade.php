@extends('layouts.app')

@section('content')
<h1 class="h3">Medico id: {{ $medico->id }}</h1>
@include('medicos.medico')
@endsection
