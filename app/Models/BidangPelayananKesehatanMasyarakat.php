<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangPelayananKesehatanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'bidang_pelayanan_kesehatan_masyarakats';

    protected $fillable = [
        'year',
        'month',
        'lokasi',
        'persentase_fasyankes_terakreditasi',
        'jumlah_rs_terakreditasi',
        'jumlah_puskesmas_terakreditasi_madya',
    ];

    protected $casts = [
        'year' => 'integer',
        'month' => 'string',
        'persentase_fasyankes_terakreditasi' => 'float',
        'jumlah_rs_terakreditasi' => 'integer',
        'jumlah_puskesmas_terakreditasi_madya' => 'integer',
    ];
}

