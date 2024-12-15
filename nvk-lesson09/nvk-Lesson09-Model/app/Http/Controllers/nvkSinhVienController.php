<?php

namespace App\Http\Controllers;

use App\Models\nvkSinhVien;
use Illuminate\Http\Request;

class nvkSinhVienController extends Controller
{
    // List / Add new / Update / Delete 
    public function nvkList()
    {
        // Lấy toàn bộ danh sách sinh viên 
        $nvkSinhVien=nvkSinhVien::all();

        return view('nvkSinhVien.nvkList',['nvkSinhVien'=>$nvkSinhVien]);
    }

    // Add 
    public function nvkCreate()
    {
        return view('nvkSinhVien.nvkCreate');
    }

    // Add sumbit 
    public function nvkCreateSumbit(Request $request)
    {
        // Lấy dữ liệu trên form, gán cho các giá trị 
        $nvkSinhVien = new nvkSinhVien();
        $nvkSinhVien ->nvkMaSV = $request->nvkMaSV;
        $nvkSinhVien ->nvkHoSV = $request->nvkHoSV;
        $nvkSinhVien ->nvkTenSV = $request->nvkTenSV;
        $nvkSinhVien ->nvkPhai = $request->nvkPhai;
        $nvkSinhVien ->nvkNgaySinh = $request->nvkNgaySinh;
        $nvkSinhVien ->nvkNoiSinh = $request->nvkNoiSinh;
        $nvkSinhVien ->nvkMaKH = $request->nvkMaKH;
        $nvkSinhVien ->nvkHocBong = $request->nvkHocBong;
        $nvkSinhVien ->nvkDTB = $request->nvkDTB;
        // Ghi vào bảng trong CSDL 
        $nvkSinhVien ->save();

        // return view('nvkSinhVien.nvkCreate');
        return back()-> with('nvkSinhVien_Created','Đã thêm mới');
    }
}
