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
    // Xem chi tiết
public function nvkShow($id)
{
    $item = nvkLoaiSanPham::where('nvkMaLoai', $id)->first(); 
    return view('nvkAdmin.nvkLoaiSanPham.Show', ['item' => $item]); 
}

// Sửa
public function nvkEdit($id)
{
    $item = nvkLoaiSanPham::where('nvkMaLoai', $id)->first(); 
    return view('nvkAdmin.nvkLoaiSanPham.Edit', compact('item')); 
}

// Cập nhật
public function nvkUpdate(Request $request, $id)
{
    $request->validate([
        'nvkTenLoai' => 'required|max:255',
        'nvkTrangThai' => 'required|in:0,1',
    ]);

    $data = $request -> only('nvkTenLoai', 'nvkTrangThai');

    nvkLoaiSanPham::where('nvkMaLoai', $id)->update($data); 

    return redirect()->route('nvkAdmin.nvkLoaiSanPham.List')->with('success', 'Cập nhật thành công!');
}

// Xóa
public function nvkDestroy($id)
{
    $item = nvkLoaiSanPham::where('nvkMaLoai', $id)->delete();
    return redirect()->route('nvkAdmin.nvkLoaiSanPham.List')->with('success', 'Xóa thành công!');
}

}    