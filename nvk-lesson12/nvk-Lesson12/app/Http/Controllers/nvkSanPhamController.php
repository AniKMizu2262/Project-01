<?php
namespace App\Http\Controllers;

use App\Models\nvkSanPham;
use App\Models\nvkLoaiSanPham;
use Illuminate\Http\Request;

class nvkSanPhamController extends Controller
{
    // Hiển thị form thêm sản phẩm
    public function nvkSanPhamCreate()
    {
        // Lấy danh sách loại sản phẩm
        $nvkLoaiSanPham = nvkLoaiSanPham::all();
        
        // Trả về view để hiển thị form thêm sản phẩm
        return view('nvkAdmin.nvkSanPham.Create', compact('nvkLoaiSanPham'));
    }

    // Lưu sản phẩm mới vào cơ sở dữ liệu
    public function nvkSanPhamStore(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'nvkMaSP' => 'required|unique:nvkSanPham,nvkMaSP|max:255',
            'nvkTenSP' => 'required|max:255',
            'nvkHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nvkSoLuong' => 'required|integer|min:1',
            'nvkDonGia' => 'required|numeric|min:0',
            'nvkMaLoai' => 'required|exists:nvkLoaiSanPham,nvkMaLoai',
            'nvkTrangThai' => 'required|in:0,1',
        ]);

        // Lưu hình ảnh vào thư mục public
        $imagePath = $request->file('nvkHinhAnh')->store('images', 'public');

        // Lưu dữ liệu sản phẩm vào cơ sở dữ liệu
        nvkSanPham::create([
            'nvkMaSP' => $validated['nvkMaSP'],
            'nvkTenSP' => $validated['nvkTenSP'],
            'nvkHinhAnh' => $imagePath,
            'nvkSoLuong' => $validated['nvkSoLuong'],
            'nvkDonGia' => $validated['nvkDonGia'],
            'nvkMaLoai' => $validated['nvkMaLoai'],
            'nvkTrangThai' => $validated['nvkTrangThai'],
        ]);

        // Chuyển hướng về trang danh sách sản phẩm và thông báo thành công
        return redirect()->route('nvkAdmin.nvkSanPham.List')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    // Danh sách sản phẩm
    public function nvkList()
    {
        $nvkSanPham = nvkSanPham::all();
        return view('nvkAdmin.nvkSanPham.List', ['nvkSanPham' => $nvkSanPham]);
    }
}

