@extends('layouts.app')

@section('content')
<h1>Mesaje id: {{ $message->id }}</h1>
<img src="{{ $message->image }}">
<p>
	{{ $message->cotent }}
</p>
@endsection