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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->foreignId('klswali_id')->references('id')->on('klswalis')->onDelete('restrict')->onUpdate('restrict');
            
            // $table->foreignId('pengajaran_id')->references('id')->on('pengajarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('pengajaran_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
