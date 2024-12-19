<?php

namespace App\Http\Controllers;

use App\Models\nvkSanPham;
use Illuminate\Http\Request;

class nvkSanPhamController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function list()
    {
        $nvkSanPham = nvkSanPham::all(); // Lấy tất cả sản phẩm
        return view('nvkSanPhamList');
    }

     // Hiển thị form thêm sản phẩm
     public function create()
     {
         return view('nvkSanPhamCreate');
     }
 
     // Xử lý lưu sản phẩm mới
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'nvkMaSP' => 'required|string|unique:nvk_san_phams|max:255',
             'nvkTenSP' => 'required|string|max:255',
             'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'nvkSoLuong' => 'required|integer|min:0',
             'nvkDonGia' => 'required|numeric|min:0',
             'nvkMaLoai' => 'required|integer',
             'nvkTrangThai' => 'required|boolean',
         ]);
 
         if ($request->hasFile('nvkHinhAnh')) {
             $validatedData['nvkHinhAnh'] = $request->file('nvkHinhAnh')->store('images', 'public');
         }
 
         nvkSanPham::create($validatedData);
 
         return redirect()->route('sanpham.list')->with('success', 'Thêm sản phẩm thành công!');
     }
     public function show($id)
     {
         // Lấy thông tin chi tiết sản phẩm theo ID
         $sanPham = nvkSanPham::findOrFail($id); // Sử dụng findOrFail để đảm bảo sản phẩm tồn tại
 
         // Trả về view chi tiết sản phẩm
         return view('nvkSanPhamList');
     }
}
