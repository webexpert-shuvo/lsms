<?php

namespace App\Http\Controllers;

use App\Mail\ShuvotestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShuvoMailController extends Controller
{
    //Shuvo Mail Data
    public function shuvomail()
    {
       $mailData = [

            'name'      => 'shuvo Mail Name',
            'uname'     => 'admin',
            'content'   => 'Lorem ipsum dolor sit amet.',
            'phone'     => '01714461547',

       ];

       Mail::to('cushytools20@gmail.com')->send(new ShuvotestMail($mailData));


    }



}
