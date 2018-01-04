<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por : <a href="/{{ $message->user->username}}">{{ $message->user->name }}</a></div>
    {{ $message->cotent }}
    <a href="/messages/{{ $message->id }}"> Leer m as</a>
</p>