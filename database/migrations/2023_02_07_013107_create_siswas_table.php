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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomer_induk')->unique();
            $table->date('tanggal_lahir');
            $table->string('alamat');

            // $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('kelas_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
