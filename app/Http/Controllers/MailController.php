<?php

namespace App\Http\Controllers;
use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public static function sendSignupEmail($email, $verification_code) {
        $data = [
           // 'name'=>$name,
            'verification_code'=>$verification_code
        ];
       
        Mail::to($email)->send(new SignupEmail($data));
    }
}
