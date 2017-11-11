<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getContact()
    {
    	return view('pages.contact');
    }

    public function postContact(Request $request)
    {
    	$this->validate($request,[
    		'email'		=> 'required|email',
    		'subject'	=> 'min:3',
    		'message'	=> 'min:10'
    	]);

    	$data = array(
    		'email'	=> $request->email,
    		'subject' => $request->subject,
    		'bodyMessage' => $request->message
    	);

    	\Mail::send('emails.contact', $data, function($message) use ($data) {
    		$message->from($data['email']);
    		$message->to('riki.maharjan382@gmail.com');
    		$message->subject($data['subject']);
    	});
    }
}
