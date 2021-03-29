<?php

namespace App\Http\Controllers;

use App\Mail\Testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestmailController extends Controller
{
    //Public function for send mail
    public function mailjao()
    {

        $mailDetail = [

            'title'     => 'This is a test mail',
            'content'   => 'This is my mail',
            'cell'      => '01714461547',
            'username'  => 'shuvo',

        ];

        Mail::to('titumire7105@gmail.com')->send(new Testmail($mailDetail));



    }


}


