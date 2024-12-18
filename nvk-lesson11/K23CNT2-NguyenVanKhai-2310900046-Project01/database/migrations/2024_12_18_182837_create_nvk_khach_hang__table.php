<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvkKhachHang', function (Blueprint $table) {
            $table->id();
            $table -> string('nvkMaKH',255)->unique();
            $table -> string('nvkTenKH',255);
            $table -> string('nvkEmail',255);
            $table -> string('nvkMatKhau',255);
            $table -> string('nvkDienThoai',255);
            $table -> string('nvkDiaChi',255);
            $table -> date('nvkNgayDK');
            $table -> tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkKhachHang');
    }
};
