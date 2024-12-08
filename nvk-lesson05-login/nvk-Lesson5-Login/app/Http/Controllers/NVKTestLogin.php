<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NVKTestLogin extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
    }
}
