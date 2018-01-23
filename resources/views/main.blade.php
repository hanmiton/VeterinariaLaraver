
@extends('layouts.app')

@section('content')

 <div class="cover-container pb-5">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading">Centro Veterinario <strong>"SAN MARTIN"</strong></h1>
        <p class="lead">Ofrecemos servicos control y peluqueria de animales</p>
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
                        @endguest

                           
</div>

@endsection