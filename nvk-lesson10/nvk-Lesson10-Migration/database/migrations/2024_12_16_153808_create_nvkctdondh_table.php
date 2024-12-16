<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvkctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table -> string('nvkSoDH');
            $table -> string('nvkMaVTu');
            $table -> integer('nvkSLDat');
            // Tạo khóa chính trên cho 2 cột (nvkSoDH, nvkMaVTu)
            $table -> primary(['nvkSoDH','nvkMaVTu']);
            // Khóa ngoại
            $table -> foreign('nvkSoDH') -> references('nvkSoDH') -> on('nvkdondh');
            $table -> foreign('nvkMaVTu') -> references('nvkMaVTu') -> on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctdondh');
    }
};
