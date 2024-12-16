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
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('nama_barang');
            $table->string('gambar')->nullable();

            $table->boolean('rekomendasi')->default(false);
            $table->decimal('harga_beli', 15,2)->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->decimal('diskon',3,0)->default(0)->nullable();
            $table->decimal('margin',15,2)->default(0)->nullable();
            $table->decimal('harga_akhir', 15, 2)->nullable();
            $table->string('stok')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->text('deskripsi')->nullable();
            $table->json('gambar_desk')->nullable();
            $table->timestamps();
        
            $table->foreign('kategori_id')->references('id')->on('tb_kategori')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barang');
    }
};
