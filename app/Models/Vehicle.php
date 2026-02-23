<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'nomor_polisi',
        'jenis',
        'merk',
        'warna',
        'kapasitas_kg',
        'status'
    ];

    // 1 kendaraan bisa digunakan banyak cargo
    public function cargos()
    {
        return $this->hasMany(Cargo::class);
    }

    // Tracking GPS kendaraan
    public function locations()
    {
        return $this->hasMany(VehicleLocation::class);
    }
}
