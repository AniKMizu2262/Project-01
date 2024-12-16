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
        Schema::create('nvkVatTu', function (Blueprint $table) {
            //$table->id();
            $table -> string('nvkMaVT') -> primary();
            $table -> string('nvkTenVT') -> unique();
            $table -> string('nvkDVT');
            $table -> float('nvkPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkVatTu');
    }
};
