<?php

namespace App\Http\Controllers;

use App\Models\nvkSanPham;
use Illuminate\Http\Request;

class nvkSanPhamController extends Controller
{
        // List
    public function nvkList()
    {
        $nvkSanPham = nvkSanPham::all();
        return view('nvkAdmin.nvkSanPham.List', ['nvkSanPham' => $nvkSanPham]);
    }

    public function nvkSanPhamStore(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $validated = $request->validate([
        'nvkMaSP' => 'required|unique:nvkSanPham,nvkMaSP|max:255', // Xác thực mã sản phẩm duy nhất
        'nvkTenSP' => 'required|max:255', // Tên sản phẩm bắt buộc
        'nvkHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Xác thực hình ảnh
        'nvkSoLuong' => 'required|integer|min:1', // Xác thực số lượng sản phẩm
        'nvkDonGia' => 'required|numeric|min:0', // Xác thực giá sản phẩm
        'nvkMaLoai' => 'required|exists:nvkLoaiSanPham,nvkMaLoai', // Kiểm tra mã loại sản phẩm tồn tại
        'nvkTrangThai' => 'required|in:0,1', // Trạng thái sản phẩm
    ]);

    // Lưu hình ảnh vào thư mục storage
    $imagePath = $request->file('nvkHinhAnh')->store('images', 'public');

    // Lưu vào cơ sở dữ liệu
    nvkSanPham::create([
        'nvkMaSP' => $validated['nvkMaSP'],
        'nvkTenSP' => $validated['nvkTenSP'],
        'nvkHinhAnh' => $imagePath, // Lưu đường dẫn ảnh
        'nvkSoLuong' => $validated['nvkSoLuong'],
        'nvkDonGia' => $validated['nvkDonGia'],
        'nvkMaLoai' => $validated['nvkMaLoai'],
        'nvkTrangThai' => $validated['nvkTrangThai'],
    ]);

    // Redirect về trang danh sách sản phẩm với thông báo thành công
    return view('nvkAdmin.nvkSanPham.List');
}

}
