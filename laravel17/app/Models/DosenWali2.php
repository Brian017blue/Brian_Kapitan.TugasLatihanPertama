<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenWali2 extends Model
{
    use HasFactory;

    protected $table = 'dosenwali2'; 

    protected $fillable = [
        'user_id',   
        'kelas_id',  
        'kode_dosen',  
        'nip',           
        'name',  
        
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas_id', 'kelas_id');
    }

    public function editRequests()
    {
        return $this->hasMany(EditRequest::class);
    }
}
