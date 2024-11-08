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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->string('judul_buku');
            $table->string('jumlah_halaman');
            $table->string('penerbit');
            $table->string('penulis');
            $table->string('cover');
            $table->integer('stok');
            $table->string('isbn')->nullable();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
