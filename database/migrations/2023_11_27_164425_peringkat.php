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
        Schema::create('peringkats', function (Blueprint $table) {
            $table->id('id_peringkat');
            $table->foreignId('nim_mhs');
            $table->string('namamhs');
            $table->string('jurusanmhs');
            $table->string('prodimhs');
            $table->decimal('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peringkat');
    }
};
