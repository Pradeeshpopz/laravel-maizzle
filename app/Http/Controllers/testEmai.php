<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;


class testEmai extends Controller
{
    public function mail(){

       $mail = Mail::to('sheltonfdo23@gmail.com')->send(new SendEmail());

       return $mail ? "success" : "failure";


    }
}
