<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(Request $request){
		  $this->validate($request, [
		    'firstname' => 'required',
		    'middlename' => 'required'
		    'lastname' => 'required'
		    'birthdate' => 'required'
		    'sex' => 'required'
		  ]);

		$message =new   Message;
		$message->firstname = $request ->input('firstname');
		$message->middlename = $request ->input('middlename');
		$message->lastname = $request ->input('lastname');
		$message->birthdate = $request ->input('birthdate');
		$message->sex = $request ->input('sex');

		$message->save();

		return redirect('/')->with('status', 'Message Sent');
		}

		public function getMessages(){
		  $messages = Message::all();

		  return view('messages')->with('messages',$messages);
		}
   }
}
