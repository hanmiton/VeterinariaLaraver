@extends('layouts.app')

@section('content')
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{$message['image']}}">
            <p class="card-text">
                {{ $message['content'] }}
                <a href="/messages/{{ $message['id'] }}"> Leer m as</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes destacados. </p>
    @endforelse
</div>
@endsection