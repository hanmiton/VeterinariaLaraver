@extends('layouts.app')

@section('content')

@foreach($enfermedades as $enfermedad)
	@include('enfermedades.enfermedad')
@endforeach

@endsection