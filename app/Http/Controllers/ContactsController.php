<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function sendEmail(Request $request){

    	$this->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'message' => 'required',
    	])

    	return $request;
    }
}
