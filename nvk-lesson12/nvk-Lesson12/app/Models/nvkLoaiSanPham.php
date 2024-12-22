<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvkLoaiSanPham extends Model
{
    use HasFactory;

    protected $table="nvkLoaiSanPham";
    protected $fillable = [
        'nvkMaLoai',
        'nvkTenLoai',
        'nvkTrangThai',
    ];
}
