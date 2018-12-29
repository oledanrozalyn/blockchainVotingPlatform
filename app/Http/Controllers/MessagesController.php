<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;


class MessagesController extends Controller
{
    public function contactsubmit(Request $request) {
    	$this->validate($request, [
    		'name' => 'required',
    		'message' => 'required'
    	]);

    	return 'Successful contact message';

    	}
  /*    return $request->input('name');
      return $request->input('message');
    } */

    public function loginsubmit(Request $request){
    	$this->validate($request, [
    		'username' => 'required|',
    		'password' => 'required'
    	]);
    	return 'Successful login';
 }	

 		 public function registersubmit(Request $request){
    	$this->validate($request, [
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'sex' => 'required',
    		'birthdate' => 'required'
    	]);
    	return 'Successful register';
 }	
    
}
