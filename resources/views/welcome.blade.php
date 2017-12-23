@extends('layouts.app')

@section('content')
<div class="row">
    <form action="/messages/create" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="message" class="form-control" placeholder="Que estas pensando?">
        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message->image }}">
            <p class="card-text">
                {{ $message->content }}
                <a href="/messages/{{ $message->id }}"> Leer m as</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes destacados. </p>
    @endforelse
</div>
@endsection