<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kelas_id',
        'new_data',
        'message',
        'status',
    ];


     public function mahasiswa()
     {
         return $this->belongsTo(Mahasiswa::class, 'user_id', 'kelas_id');
     }

     public function kelas() 
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
     
    public function dosenwali1() 
    {
        return $this->hasOne(DosenWali1::class, 'kelas_id');
    }

    public function dosenwali2() 
    {
        return $this->hasOne(DosenWali2::class, 'kelas_id');
    }

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'kelas_id');
    }
    
}
