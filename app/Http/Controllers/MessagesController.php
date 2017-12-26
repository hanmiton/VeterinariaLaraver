<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Request\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message)
    {
    	

    	return view ('messages.show', [
    		'message' => $message,
    	]);

    }

    public function create(CreateMessageRequest $request)
    {
    	$this->validate($request, [
    		'message' => ['required', 'max:160']
    	], );

    	return 'llego';
    }
}
