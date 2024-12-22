<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvkQuanTriController extends Controller
{
    // Get Login 
    public function nvkLogin()
    {
        return view('nvkLogin.Login');
    }

    // Post Login 
    public function nvkSumbit(Request $request)
    {
        return view('nvkLogin.Login');
    }
}
