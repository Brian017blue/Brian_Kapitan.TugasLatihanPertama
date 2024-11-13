<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'id',
        'user_id', 
        'kelas_id', 
        'kode_dosen', 
        'nip', 
        'name', 
        
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas_id', 'kelas_id');
    }
    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($dosen) {
            $user = User::find($dosen->user_id);
            if ($user) {
                $user->delete();
            }
        });
    }

}
