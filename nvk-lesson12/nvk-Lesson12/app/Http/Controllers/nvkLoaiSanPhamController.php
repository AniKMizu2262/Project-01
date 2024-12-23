<?php

namespace App\Http\Controllers;

use App\Models\nvkLoaiSanPham;
use Illuminate\Http\Request;

class nvkLoaiSanPhamController extends Controller
{
    // Admin: CRUD

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
        $validated = $request->validate([
            'nvkMaLoai' => 'required|unique:nvk_loai_san_phams,nvkMaLoai|max:255',
            'nvkTenLoai' => 'required|max:255',
            'nvkTrangThai' => 'required|in:0,1',
        ]);

        nvkLoaiSanPham::create($validated);

        return redirect()->route('nvkAdmin.nvkLoaiSanPham.List')->with('success', 'Thêm mới loại sản phẩm thành công');
    }

    // Show
    public function nvkShow($id)
    {
        $item = nvkLoaiSanPham::findOrFail($id);
        return view('nvkAdmin.nvkLoaiSanPham.Show', ['item' => $item]);
    }

    // Edit
    public function nvkEdit($id)
    {
        $item = nvkLoaiSanPham::findOrFail($id);
        return view('nvkAdmin.nvkLoaiSanPham.Edit', compact('item'));
    }

    // Update
    public function nvkUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'nvkTenLoai' => 'required|max:255',
            'nvkTrangThai' => 'required|in:0,1',
        ]);

        $item = nvkLoaiSanPham::findOrFail($id);
        $item->update($validated);

        return redirect()->route('nvkAdmin.nvkLoaiSanPham.List')->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function nvkDestroy($id)
    {
        $item = nvkLoaiSanPham::findOrFail($id);
        $item->delete();

        return view('nvkAdmin.nvkLoaiSanPham.List');
    }
}
