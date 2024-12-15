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
        Schema::create('tb_pekerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerja');
            $table->string('email');
            $table->string('telepon'); 
            $table->text('alamat');
            $table->enum('status',['TERSEDIA','ONGOING'])->default('TERSEDIA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pekerja');
    }
};
