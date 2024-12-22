<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvkQuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nvkMatKhau = md5("123456@a");
        DB::table('nvkQuanTri') -> insert([
            'nvkTaiKhoan' => 'nguyenvankhai2262@gmail.com',
            'nvkMatKhau' => $nvkMatKhau,
            'nvkTrangThai' => 0
        ]);
        DB::table('nvkQuanTri') -> insert([
            'nvkTaiKhoan' => '2310900046',
            'nvkMatKhau' => $nvkMatKhau,
            'nvkTrangThai' => 0
        ]);
    }
}
