@extends('layouts.app')

@section('content')
<h1>Conversacion con {{ $conversation->users->except($user->id)->implode('name', ', ') }} </h1>
@endsection