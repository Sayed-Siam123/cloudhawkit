<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Email;

class EmailController extends Controller
{
 
    public function subscription(Request $request)
    {
        $check=$this->validate($request,[
            'email' => ['required', 'string', 'email', 'unique:emails']
        ]);
            
        $email= new Email;
        $email->email=$request->input('email');
        $email->save();
           
        return view('index');
    }
}
