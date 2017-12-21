@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Seleccionar Disponibilidad</h2>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Fecha:</label>
		    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Hora:</label>
		    <input type="time" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre  de usuario">
		  </div>
		  <label for="exampleSelect1">Tipo Mascota:</label>
		    <select class="form-control" id="exampleSelect1">
		      <option>Perro </option>
		      <option>Gato</option>
		      <option>Conejo</option>
		      <option>Hamster</option>
		      <option>Loro</option>
		    </select>
		  </div>
	
	</form>
		<a href="/crearcliente">
			<button type="submit" class="btn btn-primary">Nuevo</button>
		</a>
		<a href="/consultapaciente">
			<button type="submit" class="btn btn-primary">Consulta</button>
		</a>
	</div>
	    
@endsection

@section('title')

@endsection