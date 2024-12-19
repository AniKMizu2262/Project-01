<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvkSanPham extends Model
{
    use HasFactory;
        // Tên bảng trong cơ sở dữ liệu
        protected $table = 'nvksanpham';
        protected $fillable = [
            'nvkMaSP',
            'nvkTenSP',
            'nvkHinhAnh',
            'nvkSoLuong',
            'nvkDonGia',
            'nvkMaLoai',
            'nvkTrangThai',
        ];
}
