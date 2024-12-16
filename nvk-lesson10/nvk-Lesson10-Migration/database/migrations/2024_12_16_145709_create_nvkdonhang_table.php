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
        Schema::create('nvkdonhang', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table -> string('nvkSoDH') -> primary();
            $table -> date('nvkNgayDH');
            $table -> string('nvkMaNCC');
            $table -> foreign('nvkMaNCC') -> references('nvkMaNCC') -> on('nvknhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkdonhang');
    }
};
