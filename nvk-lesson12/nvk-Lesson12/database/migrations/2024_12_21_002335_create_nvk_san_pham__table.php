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
        Schema::create('nvkSanPham', function (Blueprint $table) {
            $table->id();
            $table -> string('nvkMaSP',255)->unique();
            $table -> string('nvkTenSP',255);
            $table -> string('nvkHinhAnh',255);
            $table -> integer('nvkSoLuong');
            $table -> float('nvkDonGia');
            $table -> bigInteger('nvkMaLoai')->references('id')-> on('nvkLoaiSanPham');
            $table -> tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkSanPham');
    }
};
