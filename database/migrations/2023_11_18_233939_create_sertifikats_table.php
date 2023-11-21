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
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nim_mhs');
            $table->string('namaSertif')->default('');
            $table->string('tingkatSertif')->default('');
            $table->string('juaraSertif')->default('');
            $table->string('tanggalSertif')->default('');
            $table->string('gambarSertif')->default('');
            $table->integer('cek')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
