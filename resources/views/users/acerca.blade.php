@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Seleccionar Servicio</h2>
		  <div class="form-group">
		    <label for="exampleSelect1">Servicio:</label>
		    <select class="form-control" id="exampleSelect1">
		      <option>Peluquería </option>
		      <option>Control</option>
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