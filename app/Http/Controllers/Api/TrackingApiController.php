<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;

class TrackingApiController extends Controller
{
    // 🔥 Semua posisi terakhir (dashboard)
    public function latest()
{
    $shipments = \App\Models\Cargo::all();

    $data = $shipments->map(function ($item) {

        // ambil tracking terakhir per cargo
        $last = \App\Models\CargoTracking::where('cargo_id', $item->id)
                    ->latest()
                    ->first();

        return [
            'resi' => $item->no_resi,
            'lat' => $last->lat ?? null,
            'lng' => $last->lng ?? null,
            'status' => $last->status ?? 'No Data',
              'lokasi' => $last->lokasi ?? 'No Data',
            'time' => $last->created_at ?? null,
        ];
    });

    return response()->json($data);
}
    // 🔥 Tracking berdasarkan resi
    public function byResi($resi)
    {
        $shipment = Cargo::where('no_resi', $resi)
            ->with('trackings')
            ->first();

        if(!$shipment){
            return response()->json(['message' => 'Resi tidak ditemukan'], 404);
        }

        return response()->json([
            'resi' => $shipment->no_resi,
            'tracking' => $shipment->trackings
        ]);
    }
}