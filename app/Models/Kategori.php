<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori';

    // Atribut yang bisa diisi massal
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    // Definisikan relasi dengan model Barang
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}
