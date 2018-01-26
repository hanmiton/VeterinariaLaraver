@extends('layouts.app')

@section('content')

<!--
<div class="row">
    <form action="/messages/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('message')) has-danger @endif">
            <input type="text" name="message" class="form-control" placeholder="Que estas pensando?">
            @if ($errors->has('message'))
                @foreach ($errors->get('message') as $error)
                    <div class= "form-control-feedback"> {{ $error }} </div>
                @endforeach
            @endif
            <input type="file" class="form-control-file" name="image">
        </div>
    </form>
</div>
<div class="row">
    @forelse($messages as $message)
        <div class="col-6">
            @include('messages.message')
        </div>
    @empty
        <p>No hay mensajes destacados. </p>
    @endforelse
  
    @if(count($messages))
    <div class="mt-2 mx-auto">
        {{ $messages->links('pagination::bootstrap-4') }}
    </div>
    @endif
</div>
-->


<div class="cover-container pb-5">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading">Centro Veterinario <strong>"SAN MARTIN"</strong></h1>
        <p class="lead">Ofrecemos servicos control y peluqueria de animales fadsf</p>
        <p>
            

        </p>
    </div>
                       @guest

                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mb-2 mr-2 ml-2">Inicio Sesión</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Registrarse</a>
                            
                        @else
                            <!--añadiendo secciones  principales-->
                            
                                <!--finalizacion seccion principal-->
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu">
                                        <a class= "dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                            </li>
                            <!--<a href="/menu" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Menu</a>-->
                        @endguest



@endsection