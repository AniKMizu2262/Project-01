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
        Schema::create('nvkctpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table -> string('nvkSoPN');
            $table -> string('nvkMaVTu');
            $table -> string('nvkSLNhap');
            $table -> string('nvkDGNhap');
            // Priamry
            $table -> primary(['nvkSoPN','nvkMaVTu']);
            // Foreign
            $table -> foreign('nvkSoPN') -> references('nvkSoPN') -> on('nvkcpnhap');
            $table -> foreign('nvkMaVTu') -> references('nvkMaVTu') -> on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctpnhap');
    }
};
