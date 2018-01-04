<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por : {{ $message->user_id }}</div>
    {{ $message->cotent }}
    <a href="/messages/{{ $message->id }}"> Leer m as</a>
</p>