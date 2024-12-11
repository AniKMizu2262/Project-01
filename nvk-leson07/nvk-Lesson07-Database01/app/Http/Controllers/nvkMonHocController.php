<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nvkMonHocController extends Controller
{
    // 1. List môn học 
    public function nvkList()
    {
    $nvkMonHoc = DB::table('nvkmonhoc')->get(); 
    return view('nvkMonHoc.nvkList', ['nvkMonHoc' => $nvkMonHoc]); 
    }

}
