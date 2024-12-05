<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NVKProductController extends Controller
{
    public function nvkIndex(){
        $qua = array("tao","xoai","coc","oi");
        return view('welcome',["qua"=>$qua]);
    }
}

