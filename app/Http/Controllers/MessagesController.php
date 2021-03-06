<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
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
    	$user = $request->user();
        $image = $request->file('image');

    	$message = Message::create([
    		'user_id' => $user->id,
    		'cotent' => $request->input('message'),
    		'image' => $image->store('messages', 'public')
    	]);

    	return redirect('/messages/'.$message->id);

    }


    public function search(Request $request)
    {
        //Console::info('etamos aqui');
        $query = $request->input('query');

        $messages = Message::with('user')->where('cotent', 'LIKE', "%$query%")->get(); 

       
       return view('messages.index', ['messages' => $messages,]);
       
            
    }
}
