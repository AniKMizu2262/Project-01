<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvkLoaiSanPhamTableSeeder extends Seeder
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
          ]) ;
          DB::table('nvkLoaiSanPham') -> insert([
              'nvkMaLoai' => "LT02",
              'nvkTenLoai' => "Laptop",
              'nvkTrangThai' => 0   
            ]);
    }
}
