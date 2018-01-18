<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--
        <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/app.css">
    <link rel="stylesheet" type="text/css" href="/public/css/font-awesome.min.css">
    -->

    
</head>

<body>
    <div id="app" class="container">
        <nav class="navbar navbar-ligth static-top navbar-toggleable-md bg-faded">
            <div class="container">
                <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       "SAN MARTÍN"
                    </a>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <form action="/messages">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control" placeholder="Buscar..." required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-outline-success">
                                            Buscar
                                        </button>
                                    </span>    
                                </div>
                            </form>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!--añadiendo secciones  principales-->
                            <li class="nav-item active">
                                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Servicios</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Instalaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contactanos</a>
                                </li>
                                <!--finalizacion seccion principal-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                                </li>
                                <li  class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                        @else
                            <!--añadiendo secciones  principales-->
                            <li class="nav-item active">
                                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Servicios</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Instalaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contactanos</a>
                                </li>
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
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
