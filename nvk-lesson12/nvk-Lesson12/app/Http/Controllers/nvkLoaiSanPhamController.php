<?php

namespace App\Http\Controllers;

use App\Models\nvkLoaiSanPham;
use Illuminate\Http\Request;

class nvkLoaiSanPhamController extends Controller
{
    // Admin : CRUD

    // List
    public function nvkList()
    {
        $nvkLoaiSanPham = nvkLoaiSanPham::all();
        return view('nvkAdmin.nvkLoaiSanPham.List', ['nvkLoaiSanPham' => $nvkLoaiSanPham]);
    }

    // Create
    public function nvkCreate()
    {
        return view('nvkAdmin.nvkLoaiSanPham.Create');
    }

    public function nvkStore(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'nvkMaLoai' => 'required|unique:nvkLoaiSanPham,nvkMaLoai|max:255',
            'nvkTenLoai' => 'required|max:255',
            'nvkTrangThai' => 'required|in:0,1', // đảm bảo giá trị đúng cho trạng thái
        ]);
    
        // Lưu vào cơ sở dữ liệu
        nvkLoaiSanPham::create([
            'nvkMaLoai' => $validated['nvkMaLoai'],
            'nvkTenLoai' => $validated['nvkTenLoai'],
            'nvkTrangThai' => $validated['nvkTrangThai'],
        ]);
        return redirect()->route('nvkAdmin.nvkLoaiSanPham.List')->with('success', 'Thêm mới loại sản phẩm thành công');
    }
}    