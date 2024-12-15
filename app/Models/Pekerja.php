<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $table = 'tb_pekerja';
    protected $fillable = [
        'nama_pekerja',
        'email', 
        'telepon', 
        'alamat',
        'pekerjaan_id',
        'status',
    ];

    public function jasas()
    {
        return $this->hasMany(Jasa::class, 'pekerja_id');
    }
}
