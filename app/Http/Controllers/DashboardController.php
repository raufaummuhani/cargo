<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangKesehatanMasyarakat as BidangKesehatan;
use App\Models\BidangPelayananKesehatanMasyarakat;
use App\Models\Sekretariat;
use App\Models\BidangSumberDayaKesehatanMasyarakat;
use App\Http\Controllers\BidangPelayananKesehatanMasyarakatController;
use App\Models\BidangPencegahanPenyakitMenular;
use App\Models\Cargo;
use Carbon\Carbon;

class DashboardController extends Controller
{
    
public function index()
{
     
    $user = auth()->user();


$query = Cargo::query();



    $total   = (clone $query)->count();
    $pending = (clone $query)->where('status', 'pending')->count();
    $proses  = (clone $query)->where('status', 'proses')->count();
    $transit = (clone $query)->where('status', 'transit')->count();
    $sampai  = (clone $query)->where('status', 'sampai')->count();
        $totalPendapatan = Cargo::where('status', 'sampai')
                          ->sum('total');

     $mitratotal   = (clone $query)->where('mitra_id', $user->id)->count();
    $mitrapending = (clone $query)->where('status', 'pending')->where('mitra_id', $user->id)->count();
    $mitraproses  = (clone $query)->where('status', 'proses')->where('mitra_id', $user->id)->count();
    $mitratransit = (clone $query)->where('status', 'transit')->where('mitra_id', $user->id)->count();
    $mitrasampai  = (clone $query)->where('status', 'sampai')->where('mitra_id', $user->id)->count();
    $totalPendapatanMitra = (clone $query)->where('status', 'sampai')->where('mitra_id', $user->id)->sum('total');
                      

     $drivetotal   = (clone $query)->where('driver_id', $user->id)->count();
    $driverpending = (clone $query)->where('status', 'pending')->where('driver_id', $user->id)->count();
    $driverproses  = (clone $query)->where('status', 'proses')->where('driver_id', $user->id)->count();
    $drivertransit = (clone $query)->where('status', 'transit')->where('driver_id', $user->id)->count();
    $driversampai  = (clone $query)->where('status', 'sampai')->where('driver_id', $user->id)->count();
    $totalPendapatanDriver = (clone $query)->where('status', 'sampai')->where('driver_id', $user->id)->sum('total');

  $monthly = (clone $query)
        ->selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
        ->whereYear('created_at', date('Y'))
        ->groupBy('bulan')
        ->pluck('total', 'bulan');

    $bulanLabels = [];
    $bulanData   = [];

    for ($i = 1; $i <= 12; $i++) {
        $bulanLabels[] = Carbon::create()->month($i)->format('M');
        $bulanData[]   = $monthly[$i] ?? 0;
    }

    // TABEL
    $cargos = Cargo::with('lastTracking')->where('mitra_id', $user->id)->latest()->limit(10)->get();
    
    $cargosdriver = Cargo::with('lastTracking')->where('driver_id', $user->id)->latest()->limit(10)->get();
      $cargostotal = Cargo::with('lastTracking')->latest()->limit(10)->get();

    // SUPER ADMIN
        if ($user->hasRole('super-admin')) {
               return view('dashboard.super_admin', compact(
        'total',
        'pending',
        'proses',
        'transit',
        'sampai',
        'totalPendapatan',
        'bulanLabels',
        'bulanData',
        'cargostotal'
    ));
        }

        // ADMIN
        if ($user->hasRole('admin')) {
 return view('dashboard.admin', compact(
        'total',
        'pending',
        'proses',
        'transit',
        'sampai',
        'totalPendapatan',
        'bulanLabels',
        'bulanData',
        'cargostotal'
    ));
        }

        // MITRA
        if ($user->hasRole('mitra')) {
            return view('dashboard.mitra', compact(
                'mitratotal',
                'mitrapending',
                'mitraproses',
                'mitratransit',
                'mitrasampai',
                'totalPendapatanMitra',
                'cargos',
       
                
            ));
        }

        // DRIVER
        if ($user->hasRole('driver')) {
            return view('dashboard.driver', compact(
               'drivetotal',
                'driverpending',
                'driverproses',
                'drivertransit',
                'driversampai',
                'totalPendapatanDriver',
                'cargosdriver',
       
                
            ));
        }


    }
}
