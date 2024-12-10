<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nvkKhoaController extends Controller
{
    // Đọc dữ liệu từ bảng Khoa 
    public function nvkGetAllKhoa()
    {
        // Truy vấn dữ liệu từ bảng khoa 
        $nvkKhoa = DB::select("select * from nvkkhoa ");
        // Chuyển dữ liệu lên view 
        return view('nvkKhoa.nvkList',['nvkKhoa' => $nvkKhoa]);
    }
    public function detail($nvkMaKH)
    {
        //Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện nvkMaMH
        $nvkKhoa = DB::select('select * from nvkKhoa where nvkMaKH =? ',[$nvkMaKH])[0];
        return view('nvkKhoa.nvkDetail',['nvkKhoa'=>$nvkKhoa]);
    }
    // Edit - get
    public function edit($nvkMaKH)
    {
        $nvkKhoa = DB::select('select * from nvkKhoa where nvkMaKH =? ',[$nvkMaKH])[0];
        return view('nvkKhoa.nvkEdit',['nvkKhoa'=>$nvkKhoa]);
    }
    // Edit - sumbit 
    public function editSumbit(Request $request)
    {
        // Lấy dữ liệu mới trên form sửa 
        $nvkMaKH = $request->input('nvkMaKH');
        $nvkTenKH = $request->input('nvkTenKH');
        DB::update("update nvkkhoa set nvkTenKH=? where nvkMaKH=?",[$nvkTenKH,$nvkMaKH]);
        return redirect('/nvkKhoa');
    }
}
