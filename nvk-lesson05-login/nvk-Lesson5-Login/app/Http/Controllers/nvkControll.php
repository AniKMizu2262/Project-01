<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvkControll extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function nvkLoginSubmit(Request $request)
    {
        // Validattion form 
        $validattionData = $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:6|max:12'
        ]);
        // Lấy giá trị trên từ điều khiển của form 
        $email=$request->input('email');
        $password =$request->input('password');
        return "Email: " . $email . "Password :".$password;
    }
}
