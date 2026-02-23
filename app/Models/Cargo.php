<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'no_resi',
        'pengirim',
        'penerima',
        'jenis_pengiriman',
         'tarif_per_kg',
         'total',
         'berat',
         'name',
         'status',
         'mitra_id',
         'driver_id',
         'vehicle_id',
        'asal',
        'tujuan',
        
        
    ];

    // Relasi ke tracking
    public function trackings()
    {
        return $this->hasMany(CargoTracking::class);
    }
    public function lastTracking()
    {
        return $this->hasOne(CargoTracking::class)
                    ->latestOfMany(); // ambil data terbaru
    }
    // Relasi ke driver
   
public function driver()
{
    return $this->belongsTo(User::class, 'driver_id');
}

    // Relasi ke vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
