<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    protected $fillable = [
        'id',
        'user_id', 
        'kode_dosen', 
        'nip', 
        'name', 
        
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
