<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKesehatanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'bidang_kesehatan_masyarakats';

    protected $fillable = [
        'year',
        'month',
        'lokasi',
        'angka_kematian_ibu_per_100000',
        'angka_kematian_bayi_per_1000',
        'prevalensi_stunting',
        'cakupan_asi_eksklusif',
    ];

    protected $casts = [
        'year' => 'integer',
        'month' => 'string',
        'angka_kematian_ibu_per_100000' => 'float',
        'angka_kematian_bayi_per_1000' => 'float',
        'prevalensi_stunting' => 'float',
        'cakupan_asi_eksklusif' => 'float',
    ];
}
