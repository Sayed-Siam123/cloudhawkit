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
            'email' => 'required'
        ]);

        
        $inputEmail=$request->input('email');
        $emails=Email::get(['email']);
        
        

        
        if($check==true)
        {    
            $email= new Email;
            $email->email=$request->input('email');
            $email->save();   
        }
        
       //return view('index');
    }
}
