@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Inicio Sesión</h2>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre Usuario:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Contraseña:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <button type="submit" class="btn btn-primary">ACCEDER</button>
	</form>
	</div>
	    
@endsection

@section('title')

@endsection