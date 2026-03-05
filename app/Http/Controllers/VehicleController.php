<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::paginate(100);

        return view('vehicle.index', compact('vehicle'));
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nomor_polisi' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'merk' => 'nullable|string|max:255',
            'warna' => 'nullable|string|max:255',
            'kapasitas_kg' => 'nullable|numeric',
            'status' => 'nullable|string',
        ]);

        Vehicle::create([
            'name' => $request->name,
            'nomor_polisi' => $request->nomor_polisi,
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'warna' => $request->warna,
            'kapasitas_kg' => $request->kapasitas_kg,
            'status' => $request->status,
        ]);

        return redirect()->route('vehicle.index');
    }

    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('vehicle.show', compact('vehicle'));
    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'plate_number' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        return redirect()->route('vehicle.index');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicle.index');
    }
}
