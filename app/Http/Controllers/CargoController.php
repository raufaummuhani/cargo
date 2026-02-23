<?php
namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Support\Facades\Auth;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
            $user = Auth::user();

     if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
        // Admin lihat semua cargo
        
         $cargos = Cargo::orderBy('created_at', 'desc')->paginate(10);
    }elseif ($user->hasRole('mitra')) {
        // Driver hanya lihat cargo miliknya
        $cargos = Cargo::where('mitra_id', $user->id)->paginate(10);
    }else{
        $cargos = Cargo::where('driver_id', $user->id)->paginate(10);
    }

        return view('cargo.index', compact('cargos'));
    }

    public function create()
    {
       $drivers = Driver::where('status','available')->get();
    $vehicles = Vehicle::where('status','available')->get();

    return view('cargo.create', compact('drivers','vehicles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengirim' => 'required',
            'penerima' => 'required',
            'tarif_per_kg' => 'required',
            'asal' => 'required',
            'jenis_pengiriman' => 'required',
            'tujuan' => 'required',
            'kapasitas_kg' => 'required|numeric',
            'total' => 'required',
            
        ]);
        $tarif = $request->tarif_per_kg;
    $total = $request->berat * $tarif;


        Cargo::create([
            'no_resi' => 'WR1-471-'.time(),
            'driver_id' => $request->driver_id,
            'vehicle_id' => $request->vehicle_id,
            'pengirim' => $request->pengirim,
            'penerima' => $request->penerima,
               'tarif_per_kg' => $request->tarif_per_kg,
            'jenis_pengiriman' => $request->jenis_pengiriman,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'kapasitas_kg' => $request->kapasitas_kg,
            'status' => 'pending',
            'total' => $total,

        ]);

        return redirect()->route('cargo.index')
            ->with('success','Cargo berhasil ditambahkan');
    }

    public function edit(Cargo $cargo)
    {
        return view('cargo.edit', compact('cargo'));
    }
     public function show(Cargo $cargo)
    {
        return view('cargo.show', compact('cargo'));
    }

    public function update(Request $request, Cargo $cargo)
    {
        $cargo->update($request->only([
           'driver_id','vehicle_id','pengirim','penerima','tarif_per_kg','jenis_pengiriman','asal','tujuan','kapasitas_kg','status','total'
        ]));

        return redirect()->route('cargo.index')
            ->with('success','Cargo berhasil diupdate');
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return back()->with('success','Cargo berhasil dihapus');
    }
}
