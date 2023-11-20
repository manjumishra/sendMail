<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

class Mailcontroller extends Controller
{
    public function sendmail(){
        $details=[
         'title'=>'This mail is from testmail',
         'body'=>'this mail is for testig purpose',
        ];

        Mail::to('manjumishra1246@gmail.com')->send(new Testmail($details));
        return "email sent successfully!!";
    }
}
