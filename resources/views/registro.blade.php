@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Registro</h2>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Apellido:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Dirección:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Telefono:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Celular:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Enfermedades:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Código de veterinario:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Cédula:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Usuario:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Contraseña:</label>
		    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  
	</form>
	<a href="/perfil">
		<button type="submit" class="btn btn-primary">Continuar</button>
	</a>
	</div>
	    
@endsection

@section('title')

@endsection