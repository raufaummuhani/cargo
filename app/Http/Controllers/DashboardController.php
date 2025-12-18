<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangKesehatanMasyarakat as BidangKesehatan;
use App\Models\BidangPelayananKesehatanMasyarakat;
use App\Models\Sekretariat;
use App\Models\BidangSumberDayaKesehatanMasyarakat;
use App\Http\Controllers\BidangPelayananKesehatanMasyarakatController;
use App\Models\BidangPencegahanPenyakitMenular;
class DashboardController extends Controller
{
    
    public function index()
    {
       // ====== BIDANG KESEHATAN MASYARAKAT ======
        $kesehatan = BidangKesehatan::orderBy('id')->get();
        $kesehatan_labels = $kesehatan->pluck('month');
        $kematian_ibu = $kesehatan->pluck('angka_kematian_ibu_per_100000');
        $kematian_bayi = $kesehatan->pluck('angka_kematian_bayi_per_1000');
        $stunting = $kesehatan->pluck('prevalensi_stunting');
        $asi = $kesehatan->pluck('cakupan_asi_eksklusif');

        // ====== BIDANG PELAYANAN ======
        $pelayanan = BidangPelayananKesehatanMasyarakat::orderBy('id')->get();
        $pelayanan_labels = $pelayanan->pluck('month');
        $faskes = $pelayanan->pluck('persentase_fasyankes_terakreditasi');
        $rs = $pelayanan->pluck('jumlah_rs_terakreditasi');
        $puskesmas = $pelayanan->pluck('jumlah_puskesmas_terakreditasi_madya');

        // ====== BIDANG PENCEGAHAN PENYAKIT MENULAR ======
        $pencegahan = BidangPencegahanPenyakitMenular::orderBy('id')->get();
        $pencegahan_labels = $pencegahan->pluck('month');
        $klb = $pencegahan->pluck('persentase_pelayanan_klb');
        $tb = $pencegahan->pluck('temuan_kasus_tb');
        $imunisasi = $pencegahan->pluck('persentase_imunisasi_dasar');
        $rokok = $pencegahan->pluck('pengendalian_merokok_usia_10_18');
        $krisis = $pencegahan->pluck('persentase_penanganan_krisis');

                // ====== BIDANG SUMBER DAYA======

        $sumber_daya = BidangSumberDayaKesehatanMasyarakat::orderBy('id')->get();
        $sumberdaya_labels = $sumber_daya->pluck('month');
        $rdp = $sumber_daya->pluck('indeks_rasio_dokter_dengan_penduduk');
        $rnp = $sumber_daya->pluck('indeks_rasio_dokter_spesialis_dengan_penduduk');

          // ====== BIDANG SEKRET======

        $sekret = Sekretariat::orderBy('id')->get();
        $sekret_labels = $sekret->pluck('month');
        $skr = $sekret->pluck('nilai_sakip');

        return view('dashboard', compact(
            // kesehatan
            'kesehatan_labels', 'kematian_ibu', 'kematian_bayi', 'stunting', 'asi',
            // pelayanan
            'pelayanan_labels', 'faskes', 'rs', 'puskesmas',
            // pencegahan
            'pencegahan_labels', 'klb', 'tb', 'imunisasi', 'rokok', 'krisis',
                        'sumberdaya_labels', 'rdp', 'rnp',
                        'sekret_labels', 'skr'
        ));
    }
     public function index2()
    {
       // ====== BIDANG KESEHATAN MASYARAKAT ======
        $kesehatan = BidangKesehatan::orderBy('id')->get();
        $kesehatan_labels = $kesehatan->pluck('month');
        $kematian_ibu = $kesehatan->pluck('angka_kematian_ibu_per_100000');
        $kematian_bayi = $kesehatan->pluck('angka_kematian_bayi_per_1000');
        $stunting = $kesehatan->pluck('prevalensi_stunting');
        $asi = $kesehatan->pluck('cakupan_asi_eksklusif');

        // ====== BIDANG PELAYANAN ======
        $pelayanan = BidangPelayananKesehatanMasyarakat::orderBy('id')->get();
        $pelayanan_labels = $pelayanan->pluck('month');
        $faskes = $pelayanan->pluck('persentase_fasyankes_terakreditasi');
        $rs = $pelayanan->pluck('jumlah_rs_terakreditasi');
        $puskesmas = $pelayanan->pluck('jumlah_puskesmas_terakreditasi_madya');

        // ====== BIDANG PENCEGAHAN PENYAKIT MENULAR ======
        $pencegahan = BidangPencegahanPenyakitMenular::orderBy('id')->get();
        $pencegahan_labels = $pencegahan->pluck('month');
        $klb = $pencegahan->pluck('persentase_pelayanan_klb');
        $tb = $pencegahan->pluck('temuan_kasus_tb');
        $imunisasi = $pencegahan->pluck('persentase_imunisasi_dasar');
        $rokok = $pencegahan->pluck('pengendalian_merokok_usia_10_18');
        $krisis = $pencegahan->pluck('persentase_penanganan_krisis');

                // ====== BIDANG SUMBER DAYA======

        $sumber_daya = BidangSumberDayaKesehatanMasyarakat::orderBy('id')->get();
        $sumberdaya_labels = $sumber_daya->pluck('month');
        $rdp = $sumber_daya->pluck('indeks_rasio_dokter_dengan_penduduk');
        $rnp = $sumber_daya->pluck('indeks_rasio_dokter_spesialis_dengan_penduduk');

          // ====== BIDANG SEKRET======

        $sekret = Sekretariat::orderBy('id')->get();
        $sekret_labels = $sekret->pluck('month');
        $skr = $sekret->pluck('nilai_sakip');

        return view('welcome', compact(
            // kesehatan
            'kesehatan_labels', 'kematian_ibu', 'kematian_bayi', 'stunting', 'asi',
            // pelayanan
            'pelayanan_labels', 'faskes', 'rs', 'puskesmas',
            // pencegahan
            'pencegahan_labels', 'klb', 'tb', 'imunisasi', 'rokok', 'krisis',
                        'sumberdaya_labels', 'rdp', 'rnp',
                        'sekret_labels', 'skr'
        ));
    }

}
