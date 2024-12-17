<?php

namespace App\Http\Controllers;

use App\Models\nvkNhaCC;
use Illuminate\Http\Request;

class nvkNhaCCController extends Controller
{
    // List / Create / edit / delete
    public function list()
    {
        // Lấy dữ liệu tưd db thông qua oem 
        $nvkNhaCC = nvkNhaCC::all();
        return view('nvkNhaCC.List',['nvkNhaCC' => $nvkNhaCC]);
    }
}
