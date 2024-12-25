<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    use HasFactory;
    protected $table = 'tb_jasa';
    protected $fillable = [
        'kategori_jasa',
        'nama_jasa',
        'deskripsi',
        'tarif',
        'pekerja_id',
        'status',
        'rating',
        'snk',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function setStatusAttribute($value)
    {
        if (is_null($this->attributes['pekerja_id'])) {
            $this->attributes['status'] = 'PENDING';
        } else {
            $this->attributes['status'] = $value; // Menyimpan status sesuai input jika pekerja_id sudah ada
        }
    }

    
    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'pekerja_id');
    }
}
