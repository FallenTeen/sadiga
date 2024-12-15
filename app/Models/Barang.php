<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model

{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $fillable = [
        'merk',
        'nama_barang',
        'harga',
        'diskon',
        'harga_akhir',
        'stok',
        'kategori_id',
        'deskripsi',
        'gambar',
        'gambar_desk',
        'rating',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'user_barang_likes')->withTimestamps();
    }
}
