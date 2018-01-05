@extends('layouts.app')

@section('content')
<h1>Conversacion con {{ $conversation->users->except($user->id)->implode('name', ', ') }} </h1>

<div class="card">
	@foreach($conversation->privateMessages as $message)
	<div class="card-block">
		<p>{{ $message->user->name }} dijo...</p>
		<p>{{ $message->message }}</p>
		<p>{{ $message->created_at }}</p>
	</div>
	@endforeach	
</div>
@endsection