<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvkSessionController extends Controller
{
    // Đọc dữ liệu từ session
    public function nvkGetSessionData(Request $request)
    {
        if($request->session()->has('K23CNT2 - Nguyễn Văn Khải'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo "<h2> No Data </h2>";
        }
    } 

    // Lưu dữ liệu vào session
    public function nvkSaveSessionData(Request $request)
    {
        $request->session()->put('Nguyễn Khải','K23CNT2 - Nguyen Trai University');
        echo "<h2>Dữ liệu đã được lưu !</h2>";
    }

    // Xóa dữ liệu trong session 
    public function nvkDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT2 - Nguyễn Khải ');
        echo "<h2>Giá trị đã bị xóa !</h2>";
    }
}
