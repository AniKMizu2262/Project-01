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
        Schema::create('nvkHoaDon', function (Blueprint $table) {
            $table->id();
            $table -> string('nvkMaHD',255)->unique();
            $table -> bigInteger('nvkMaKH') -> references('id') -> on('nvkKhachHang');
            $table -> date('nvkNgayHD');
            $table -> string('nvkHoTenKH');
            $table -> string('nvkEmail');
            $table -> string('nvkDienThoai');
            $table -> string('nvkDiaChi');
            $table -> float('nvkTongGT');
            $table -> tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkHoaDon');
    }
};
