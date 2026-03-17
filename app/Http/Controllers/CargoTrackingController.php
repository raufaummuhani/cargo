<?php
namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\CargoTracking;
use Illuminate\Http\Request;

class CargoTrackingController extends Controller
{
   
    public function index(Cargo $cargo)
    {
        $trackings = CargoTracking::where('cargo_id', $cargo->id)
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('cargo_tracking.index', [
            'cargo' => $cargo,
            'trackings' => $trackings
        ]);
    }
    

    public function create($cargo_id)
    {
        $cargo = Cargo::findOrFail($cargo_id);
        return view('cargo_tracking.create', compact('cargo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cargo_id'=>'required',
             'lokasi'=>'required',
            'status'=>'required',
            'keterangan'=>'required',
            'lat'=>'required',
            'lng'=>'required'
        ]);

          CargoTracking::create([
            'cargo_id'  => $request->cargo_id,
            'lokasi'    => $request->lokasi,
            'status'    => $request->status,
            'keterangan'=> $request->keterangan,
            'lat'  => $request->lat,
            'lng' => $request->lng,
   
    
        ]);

    return redirect()
        ->route('cargo_tracking.index', $request->cargo_id)
        ->with('success','Tracking berhasil ditambahkan');
    }

public function edit(CargoTracking $cargoTracking)
{
    return view('cargo_tracking.edit', ['item' => $cargoTracking]);

}

public function update(Request $request, CargoTracking $cargoTracking)
{
 $request->validate([
         'lokasi' => 'required',
        'status' => 'required',
        'lat' => 'required',
        'lng' => 'required',
        'keterangan' => 'nullable'
    ]);

    $cargoTracking->update([
        'lokasi' => $request->lokasi,
        'status' => $request->status,
        'lat' => $request->lat,
        'lng' => $request->lng,
        'keterangan' => $request->keterangan
    ]);

    return redirect()
        ->route('cargo_tracking.index', $cargoTracking->cargo_id)
        ->with('success','Tracking berhasil diperbarui');
}


    public function destroy(CargoTracking $cargoTracking)
    {
        $cargoTracking->delete();
        return back()->with('success','Tracking dihapus');
    }
}
