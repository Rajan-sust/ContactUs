<?php

namespace App\Http\Controllers;



use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function sendMessage(Request $request) {
    	$name = $request->input('name');
    	$sms = $request->input('sms');
    	Mail::to('biswajorapathshala@gmail.com')->send(new ContactUs($name,$sms));
    	return back();

    }
}
