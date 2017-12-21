@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Creación Cliente</h2>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Apellido:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Celular:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Correo:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Telefono Convencional:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
	</form>
	<a href="/crearpaciente">
		<button type="submit" class="btn btn-primary">Continuar</button>
	</a>
	</div>
	    
@endsection

@section('title')

@endsection