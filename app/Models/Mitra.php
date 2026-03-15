<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitras';

    protected $fillable = [
        'nama_mitra',
        'user_id',
        'nama_pic',
        'email',
        'whatsapp',
        'jenis_bisnis',
        'volume_pengiriman',
        'alamat',
        'status',
    ];

    // Default status saat dibuat dari form publik
    protected $attributes = [
        'status' => 'Diproses',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}