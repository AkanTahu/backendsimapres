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
        Schema::create('api_datas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->string('jurusan');
            $table->integer('tahunMasuk');
            $table->integer('ipk');
            $table->decimal('ipkORI');
            $table->integer('alpha');
            $table->integer('alphaORI');
            $table->integer('sertifikat');
            $table->decimal('spk');
            $table->string('username');
            $table->string('password');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_datas');
    }
};
