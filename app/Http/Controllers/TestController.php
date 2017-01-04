<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function mail($to, $subject, $message=null){

        return view('test.mail', ['mailData' => compact('to', 'subject', 'message')]);
    }
}
