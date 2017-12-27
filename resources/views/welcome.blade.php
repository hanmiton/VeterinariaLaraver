@extends('layouts.app')

@section('content')
<div class="row">
    <form action="/messages/create" method="post">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('message')) has-danger @endif">
            <input type="text" name="message" class="form-control" placeholder="Que estas pensando?">
            @if ($errors->has('message'))
                @foreach ($errors->get('message') as $error)
                    <div class= "form-control-feedback"> {{ $error }} </div>
                @endforeach
            @endif
        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message->image }}">
            <p class="card-text">
                {{ $message->cotent }}
                <a href="/messages/{{ $message->id }}"> Leer m as</a>
            </p>
        </div>
    @empty
        <p>No hay mensajes destacados. </p>
    @endforelse

    @if(count($messages))
        {{ $messages->links() }}
    @endif
</div>
@endsection