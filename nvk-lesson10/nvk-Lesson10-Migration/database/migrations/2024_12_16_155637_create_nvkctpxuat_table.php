<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvkctpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table -> string('nvkSoPX');
            $table -> string('nvkMaVTu');
            $table -> string('nvkSLXuat');
            $table -> string('nvkDGXuat');
            // Priamry
            $table -> primary(['nvkSoPX','nvkMaVTu']);
            // Foreign
            $table -> foreign('nvkSoPX') -> references('nvkSoPX') -> on('nvkcpxuat');
            $table -> foreign('nvkMaVTu') -> references('nvkMaVTu') -> on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctpxuat');
    }
};
