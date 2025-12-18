<?php


namespace App\Http\Controllers;

use App\Models\Sekretariat;
use App\Http\Requests\StoreSekretariatRequest;
use App\Http\Requests\UpdateSekretariatRequest;

class SekretariatController extends Controller
{
    public function index()
    {
        $data = Sekretariat::orderBy('month', 'desc')->paginate(10);
        return view('sekretariat.index', compact('data'));
    }

    public function create()
    {
        return view('sekretariat.create');
    }

    public function store(StoreSekretariatRequest $request)
    {
        Sekretariat::create($request->validated());
        return redirect()->route('sekretariat.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show(Sekretariat $sekretariat)
    {
        return view('sekretariat.show', compact('sekretariat'));
    }

    public function edit(Sekretariat $sekretariat)
    {
        return view('sekretariat.edit', compact('sekretariat'));
    }

    public function update(UpdateSekretariatRequest $request, Sekretariat $sekretariat)
    {
        $sekretariat->update($request->validated());
        return redirect()->route('sekretariat.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Sekretariat $sekretariat)
    {
        $sekretariat->delete();
        return redirect()->route('sekretariat.index')->with('success', 'Data berhasil dihapus!');
    }
}
