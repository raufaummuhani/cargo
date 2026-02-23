<?php
namespace App\Http\Controllers;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::latest()->paginate();
        return view('vehicle.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nomor_polisi' => 'required|unique:vehicles',
            'jenis' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'kapasitas_kg' => 'required|integer',
            'status' => 'required'
        ]);

        Vehicle::create($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Vehicle berhasil ditambahkan');
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'name' => 'required',
            'nomor_polisi' => 'required|unique:vehicles,nomor_polisi,' . $vehicle->id,
            'jenis' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'kapasitas_kg' => 'required|integer',
            'status' => 'required'
        ]);

        $vehicle->update($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Vehicle berhasil diupdate');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return back()->with('success', 'Vehicle berhasil dihapus');
    }
}
