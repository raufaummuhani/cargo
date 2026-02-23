<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoTracking extends Model
{
    protected $table = 'cargo_trackings';

    protected $fillable = [
        'cargo_id',
        'lokasi',
        'status',
        'keterangan',
        'lat',
        'lng'
    ];

    // Relasi ke cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}

