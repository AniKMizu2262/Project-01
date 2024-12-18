<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvkQuanTriController extends Controller
{
    // Get login
    public function nvkLogin()
    {
        return view('nvkLogin.Login');
    }

    // Post login 
    public function nvkLoginSumbit(Request $request)
    {
        return view('nvkLogin.Sumbit');
    }
}
