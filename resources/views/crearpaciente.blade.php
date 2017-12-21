@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Creación Paciente</h2>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Especie:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Raza:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Sexo:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Color:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Edad:</label>
		    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Fecha de naciemiento:</label>
		    <input type="time" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
	</form>
	<a href="/disponibilidad">
		<button type="submit" class="btn btn-primary">Continuar</button>
	</a>
	</div>
	    
@endsection

@section('title')

@endsection