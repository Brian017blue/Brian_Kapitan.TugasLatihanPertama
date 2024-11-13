<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model

{
    protected $fillable = [
        'id',
        'user_id', 
        'kelas_id', 
        'nim', 
        'name', 
        'tempat_lahir', 
        'tanggal_lahir',
        'approval_status', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    public function kelas() 
    {
        return $this->belongsTo(Kelas::class);
    }
    
    public function editRequests()
    {
        return $this->hasMany(EditRequest::class, 'mahasiswa_id');
    }

    public function dosenwali1() 
    {
        return $this->belongsTo(DosenWali1::class);
    }

    public function dosenwali2() 
    {
        return $this->belongsTo(DosenWali2::class);
    }
    
}
