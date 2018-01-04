<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<span class="text-muted"> {{ $message->user_id }}</span>
    {{ $message->cotent }}
    <a href="/messages/{{ $message->id }}"> Leer m as</a>
</p>