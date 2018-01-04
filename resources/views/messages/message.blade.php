<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por : {{ $message->user->name }}</div>
    {{ $message->cotent }}
    <a href="/messages/{{ $message->id }}"> Leer m as</a>
</p>