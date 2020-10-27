<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cms\Message;

class MessageController extends Controller
{

	public function index()
	{
		$messages = Message::orderBy('id', 'DESC')->get();
		return view('cms.mensajes.index', compact('messages'));
	}

	public function getMessage($id)
	{	

		$message = Message::find($id);

		return response()->json($message, 200);
	}

    public function sendMessage(Request $request)
    {
    	Message::create($request->all());

    	return redirect('/gracias-por-contactarnos#contacted')->with('message', 'Mensaje enviado con éxito!');
    }
}
