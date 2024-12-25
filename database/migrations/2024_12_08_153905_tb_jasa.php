<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_jasa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id')->default(1);
            $table->string('nama_jasa');
            $table->text('deskripsi');
            $table->decimal('tarif', 15, 2);
            $table->unsignedBigInteger('pekerja_id')->nullable();
            $table->enum('status', ['TERSEDIA', 'SELESAI', 'PENDING', 'ONGOING'])->default('TERSEDIA');
            $table->text('snk');
            $table->boolean('rekomendasi')->default(false);
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('tb_kategori')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jasa');
    }
};
