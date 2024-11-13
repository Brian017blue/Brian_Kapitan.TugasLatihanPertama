<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'jumlah', 
            ];

            public function dosen()
            {
                return $this->hasOne(Dosen::class, 'kelas_id');
            }
        
            public function mahasiswa()
            {
                return $this->hasMany(Mahasiswa::class, 'kelas_id');
            }
}
