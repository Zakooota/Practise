<?php

namespace App\Http\Controllers;
use App\Mail\contactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactFormController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data= request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        
/*
         \Mail::send('contactMail', array(
            $input['name'],
            $input['email'],
            $input['message'],
        ), function($message) use ($input){
            $message->from($input['email']);
            $message->to('decentaamir009@gmail.com', 'Admin')->subject($input['message']);
        });
*/       Mail::to('test@test.com')->send(new contactFormMail($data));
        return redirect('/contact/create')->with(['message' => 'Thanks for your message']);
       
    }

   
}
