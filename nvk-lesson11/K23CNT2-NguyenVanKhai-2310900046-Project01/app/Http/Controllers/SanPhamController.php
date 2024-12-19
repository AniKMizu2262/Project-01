<?php

namespace App\Http\Controllers;

use App\Models\nvkSanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function show($id)
    {
        // Lấy thông tin sản phẩm từ DB
        $sanPham = nvkSanPham::findOrFail($id);

        // Trả về view chi tiết sản phẩm
        return view('nvkSanPhamList', compact('sanPham'));
    }
}
