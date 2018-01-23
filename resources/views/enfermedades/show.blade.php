@extends('layouts.app')

@section('content')
<h1 class="h3">Enfermedad id: {{ $enfermedad->id }}</h1>
@include('enfermedades.enfermedad')
@endsection
