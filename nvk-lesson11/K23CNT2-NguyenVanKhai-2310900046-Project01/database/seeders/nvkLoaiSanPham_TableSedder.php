<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvkLoaiSanPham_TableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvkLoaiSanPham') -> insert([
          'nvkMaLoai' => "DT01",
          'nvkTenLoai' => "Điện thoại",
          'nvkTrangThai' => 0   
        ]);
        DB::table('nvkLoaiSanPham') -> insert([
            'nvkMaLoai' => "LT02",
            'nvkTenLoai' => "Laptop",
            'nvkTrangThai' => 0   
          ]);
          DB::table('nvkLoaiSanPham') -> insert([
            'nvkMaLoai' => "PK03",
            'nvkTenLoai' => "Phụ kiện",
            'nvkTrangThai' => 0   
          ]);
    }
}
