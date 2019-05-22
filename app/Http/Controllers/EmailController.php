<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Email;

class EmailController extends Controller
{
    public function subscription(Request $request)
    {
        $check=$this->validate($request,[
            'email' => 'required'
        ]);

        $emailCheck=false;
        $emails=Email::select('email');
        
        foreach($emails as $email)
        {
            if($email==$request->input('email'))
            {
                $emailCheck=false;
            }
            else
            {
                $emailCheck=true;
            }
        }

        if($check==true and $emailCheck==true)
        {
            $email= new Email;
            $email->email=$request->input('email');
            $email->save();
        }
        
       return view('index');
    }
}
