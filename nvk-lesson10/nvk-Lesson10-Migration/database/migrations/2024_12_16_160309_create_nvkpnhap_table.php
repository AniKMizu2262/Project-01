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
        Schema::create('nvkpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table -> string('nvkSoPN') -> primary();
            $table -> string('nvkNgayNhap');
            $table -> string('nvkSoDH');
            // Foreign
            $table -> foreign('nvkSoDH') -> references('nvkSoDH') -> on('nvkdondh'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkpnhap');
    }
};
