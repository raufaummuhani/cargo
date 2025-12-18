<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangSumberDayaKesehatanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'bidang_sumber_daya_kesehatan_masyarakats';

    protected $fillable = [
        'year',
        'month',
        'lokasi',
        'indeks_rasio_dokter_dengan_penduduk',
        'indeks_rasio_dokter_spesialis_dengan_penduduk',
    ];

    protected $casts = [
        'year' => 'integer',
        'month' => 'string',
        'indeks_rasio_dokter_dengan_penduduk' => 'float',
        'indeks_rasio_dokter_spesialis_dengan_penduduk' => 'float',
    ];
}

