@extends('layouts.app')

@section('content')
<div class="row">
    <form action="/medicos/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('medico')) has-danger @endif">
            <input type="text" name="medico" class="form-control" placeholder="Que estas pensando?">
            @if ($errors->has('medico'))
                @foreach ($errors->get('medico') as $error)
                    <div class= "form-control-feedback"> {{ $error }} </div>
                @endforeach
            @endif
            <input type="file" class="form-control-file" name="image">
        </div>
    </form>
</div>
<div class="row">
    @forelse($medicos as $medico)
        <div class="col-6">
            @include('medicos.medico')
        </div>
    @empty
        <p>No hay mensajes destacados. </p>
    @endforelse
  
    @if(count($medicos))
    <div class="mt-2 mx-auto">
        {{ $medicos->links('pagination::bootstrap-4') }}
    </div>
    @endif
</div>
@endsection