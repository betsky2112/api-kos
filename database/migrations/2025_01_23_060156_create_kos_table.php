<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi');
            $table->integer('harga');
            $table->json('fasilitas')->nullable();
            $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tersedia');
            $table->foreignId('pemilik_id')->constrained('pemilik_kos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kos');
    }
};
