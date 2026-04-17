<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use Carbon\Carbon;
use DB;

class LaporanController extends Controller
{
    // ======================
    // ✅ LAPORAN HARIAN
    // ======================
    public function harian(Request $request)
    {
        $tanggal = $request->tanggal ?? Carbon::today()->toDateString();

        $data = Cargo::with('lastTracking')
            ->whereDate('created_at', $tanggal)
            ->get();

        $totalPengiriman = $data->count();
        $totalBerat = $data->sum('berat');
        $totalOngkir = $data->sum('total');

        // Status dari tracking terbaru
        $status = $data->groupBy(function ($item) {
            return optional($item->lastTracking)->status ?? 'unknown';
        })->map->count();

        return view('laporan.lap_harian', compact(
            'data',
            'tanggal',
            'totalPengiriman',
            'totalBerat',
            'totalOngkir',
            'status'
        ));
    }

    // ======================
    // ✅ LAPORAN BULANAN
    // ======================
    public function bulanan(Request $request)
    {
        $bulan = $request->bulan ?? Carbon::now()->format('Y-m');

        $tahun = substr($bulan, 0, 4);
        $bulanAngka = substr($bulan, 5, 2);

        $data = Cargo::with('lastTracking')
            ->whereYear('created_at', $tahun)
            ->whereMonth('created_at', $bulanAngka)
            ->get();

        $totalPengiriman = $data->count();
        $totalBerat = $data->sum('berat');
        $totalOngkir = $data->sum('total');

        // 📊 Rekap Harian
        $rekapHarian = Cargo::select(
                DB::raw('DATE(created_at) as tanggal'),
                DB::raw('count(*) as total_pengiriman'),
                DB::raw('sum(berat) as total_berat'),
                DB::raw('sum(total) as total_ongkir')
            )
            ->whereYear('created_at', $tahun)
            ->whereMonth('created_at', $bulanAngka)
            ->groupBy('tanggal')
            ->get();

        // 📊 Rekap Status (dari tracking terbaru)
        $rekapStatus = $data->groupBy(function ($item) {
            return optional($item->lastTracking)->status ?? 'unknown';
        })->map->count();

        return view('laporan.lap_bulanan', compact(
            'data',
            'bulan',
            'totalPengiriman',
            'totalBerat',
            'totalOngkir',
            'rekapHarian',
            'rekapStatus'
        ));
    }
   

public function tujuan(Request $request)
{
    $tanggalAwal = $request->tanggal_awal ?? Carbon::now()->startOfMonth()->toDateString();
    $tanggalAkhir = $request->tanggal_akhir ?? Carbon::now()->endOfMonth()->toDateString();

    // 📊 Rekap berdasarkan tujuan
    $rekapTujuan = Cargo::select(
            'tujuan',
            DB::raw('count(*) as total_pengiriman'),
            DB::raw('sum(berat) as total_berat'),
            DB::raw('sum(total) as total_ongkir')
        )
        ->whereBetween('created_at', [$tanggalAwal, $tanggalAkhir])
        ->groupBy('tujuan')
        ->orderByDesc('total_pengiriman')
        ->get();

    // Total keseluruhan
    $totalPengiriman = $rekapTujuan->sum('total_pengiriman');
    $totalBerat = $rekapTujuan->sum('total_berat');
    $totalOngkir = $rekapTujuan->sum('total_ongkir');

    return view('laporan.lap_tujuan', compact(
        'rekapTujuan',
        'tanggalAwal',
        'tanggalAkhir',
        'totalPengiriman',
        'totalBerat',
        'totalOngkir'
    ));
}
}