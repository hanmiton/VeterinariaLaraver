@extends('layouts.app')

@section('content')
	<div class="container col col-sm-3" >
		<form>
			<h2>Asignar Perfil</h2>
			<p>nombre y apellido veterinario</p>
		  <div class="form-group">
		    <label for="exampleSelect1">Example select</label>
		    <select class="form-control" id="exampleSelect1">
		      <option>Cirugía y Traumatología</option>
		      <option>Dermatología</option>
		      <option>Ecografía</option>
		      <option>Endoscopía</option>
		      <option>Fisioterapía</option>
		      <option>Oncología</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Lunes:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Martes:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Miercoles:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Jueves:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Viernes:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Sabado:</label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese Contraseña">
		  </div>

		  
	</form>
		<a href="/menu">
			<button type="submit" class="btn btn-primary">Continuar</button>
		</a>
	</div>
	    
@endsection

@section('title')

@endsection