<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.Login');
    }

    public function authenticate(Request $request)
    {
       $validator =Validator::make($request->all(),[
            'email' => 'required/email',
            'password' => 'required'
       ]);

       if($validator->passes()) {

       }else {
            return redirect()->route('login')->withInput()->withErrors($validator);
       }
    }
}
