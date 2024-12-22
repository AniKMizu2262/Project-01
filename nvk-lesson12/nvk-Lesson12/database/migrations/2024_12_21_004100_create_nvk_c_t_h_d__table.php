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
        Schema::create('nvkCTHD', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('nvkHoaDonID') -> references('id') -> on('nvkHoaDon');
            $table -> bigInteger('nvkSanPhamID') -> references('id') -> on('nvkSanPham');
            $table -> integer('nvkSLMua');
            $table -> float('nvkDonGiaMua');
            $table -> float('nvkThanhTien');
            $table -> tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkCTHD');
    }
};
