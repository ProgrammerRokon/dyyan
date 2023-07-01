<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;


class TestMailController extends Controller
{
    /*public function index(){
        $mailData = [
            'title' => 'Demo Laravel Mail from Dyyan Group',
            'body' => 'This is test mail from laravel 10 application by Dyyan Group'
        ];

        Mail::to('mkhan152069@bscse.uiu.ac.bd')->send(new TestMail($mailData));
        dd('Mail send sucessfully');
    }*/
    //OR,
    public function index()
    {
        $mailData = [
            'title' => 'Demo Laravel Mail from Dyyan Group',
            'body' => 'This is test mail from laravel 10 application by Dyyan Group'
        ];
        Mail::to('mkhan152069@bscse.uiu.ac.bd')->send(new TestMail($mailData));

        if (Mail::flushMacros()) {
            echo "Sorry! Please try again latter";
        }else{
            echo "Great! Successfully send in your mail";
        }
    }
}
