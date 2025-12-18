<?php

namespace App\Http\Controllers;

use App\Models\BidangPencegahanPenyakitMenular as BidangPencegahan;
use Illuminate\Http\Request;

class BidangPencegahanPenyakitMenularController extends Controller
{
    /**
     * Tampilkan semua data
     */
    public function index()
    {
        $data = BidangPencegahan::orderBy('id', 'desc')->paginate(10);
        return view('bidang_pencegahan.index', compact('data'));
    }

    /**
     * Form tambah data baru
     */
    public function create()
    {
        return view('bidang_pencegahan.create');
    }

    /**
     * Simpan data baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'month' => 'required|string',
                      'year' => 'required|numeric',
            'persentase_pelayanan_klb' => 'required|numeric|min:0|max:100',
            'temuan_kasus_tb' => 'required|integer|min:0',
            'persentase_imunisasi_dasar' => 'required|numeric|min:0|max:100',
            'pengendalian_merokok_usia_10_18' => 'required|numeric|min:0|max:100',
            'persentase_penanganan_krisis' => 'required|numeric|min:0|max:100',
        ]);

        BidangPencegahan::create($validated);

        return redirect()->route('bidang_pencegahan.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Tampilkan detail data
     */
    public function show(BidangPencegahan $bidang_pencegahan)
    {
        return view('bidang_pencegahan.show', compact('bidang_pencegahan'));
    }

    /**
     * Form edit data
     */
    public function edit(BidangPencegahan $bidang_pencegahan)
    {
        return view('bidang_pencegahan.edit', ['item' => $bidang_pencegahan]);
    }

    /**
     * Update data
     */
    public function update(Request $request, BidangPencegahan $bidang_pencegahan)
    {
        $validated = $request->validate([
            'month' => 'required|string',
                      'year' => 'required|numeric',
            'persentase_pelayanan_klb' => 'required|numeric|min:0|max:100',
            'temuan_kasus_tb' => 'required|integer|min:0',
            'persentase_imunisasi_dasar' => 'required|numeric|min:0|max:100',
'pengendalian_merokok_usia_10_18' => 'required|numeric|min:0|max:100',
            'persentase_penanganan_krisis' => 'required|numeric|min:0|max:100',
        ]);

        $bidang_pencegahan->update($validated);

        return redirect()->route('bidang_pencegahan.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy(BidangPencegahan $bidang_pencegahan)
    {
        $bidang_pencegahan->delete();

        return redirect()->route('bidang_pencegahan.index')->with('success', 'Data berhasil dihapus.');
    }
}
