<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\GenricMail;

class MailController extends Controller
{
    public function genric_mail(){
        $mailData=[
            "name"=>"Amit",
            'vala'=>'kumar'
        ];
        Mail::to('amit@loapmudracreative.com')->send(new GenricMail($mailData));
        dd('mail sent.');
        
    }
}
