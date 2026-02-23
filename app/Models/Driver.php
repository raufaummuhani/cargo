<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
  protected $fillable = [
        'nama',
        'user_id',
        'no_hp',
        'alamat',
        'no_sim',
        'status',
        'mitra_id',
    ];

    
   
    // Driver bisa membawa banyak cargo
    public function cargos()
    {
        return $this->hasMany(Cargo::class);
    }
    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
