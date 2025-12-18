<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangPencegahanPenyakitMenular extends Model
{
    use HasFactory;

    protected $fillable = [
        'month',
        'year',
        'persentase_pelayanan_klb',
        'temuan_kasus_tb',
        'persentase_imunisasi_dasar',
        'pengendalian_merokok_usia_10_18',
        'persentase_penanganan_krisis',
    ];

    public function getNamaBulanAttribute()
    {
        $bulanList = [
            1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',
            7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'November',12=>'Desember'
        ];
        return $bulanList[$this->bulan] ?? '-';
    }
}
