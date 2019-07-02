<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendContactNotification;

class ContactsController extends Controller
{
    public function sendEmail(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'message' => 'required',
    	]);

    	Notification::route('mail', 'test@gmail.com')
    					->notify(new sendContactNotification($request));

    Session::flash('success', 'The email was sent successfully! We will get in touch with you soonest. Thanks');

	return redirect()->route('pages.contact');

    }


}
