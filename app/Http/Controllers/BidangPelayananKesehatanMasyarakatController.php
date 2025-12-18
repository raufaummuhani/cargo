<?php


namespace App\Http\Controllers;

use App\Models\BidangPelayananKesehatanMasyarakat;
use App\Http\Requests\StoreBidangPelayananKesehatanRequest;
use App\Http\Requests\UpdateBidangPelayananKesehatanRequest;


class BidangPelayananKesehatanMasyarakatController extends Controller
{
    public function index()
    {
        $items = BidangPelayananKesehatanMasyarakat::orderBy('month', 'desc')->paginate(15);
        return view('bidang_pelayanan_kesehatan.index', compact('items'));
    }

    public function create()
    {
        return view('bidang_pelayanan_kesehatan.create');
    }

    public function store(StoreBidangPelayananKesehatanRequest $request)
    {
        BidangPelayananKesehatanMasyarakat::create($request->validated());
        return redirect()->route('bidang_pelayanan_kesehatan.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show(BidangPelayananKesehatanMasyarakat $bidang_pelayanan_kesehatan)
    {
        return view('bidang_pelayanan_kesehatan.show', ['item' => $bidang_pelayanan_kesehatan]);
    }

    public function edit(BidangPelayananKesehatanMasyarakat $bidang_pelayanan_kesehatan)
    {
        return view('bidang_pelayanan_kesehatan.edit', ['item' => $bidang_pelayanan_kesehatan]);
    }

    public function update(UpdateBidangPelayananKesehatanRequest $request, BidangPelayananKesehatanMasyarakat $bidang_pelayanan_kesehatan)
    {
        $bidang_pelayanan_kesehatan->update($request->validated());
        return redirect()->route('bidang_pelayanan_kesehatan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(BidangPelayananKesehatanMasyarakat $bidang_pelayanan_kesehatan)
    {
        $bidang_pelayanan_kesehatan->delete();
        return redirect()->route('bidang_pelayanan_kesehatan.index')->with('success', 'Data berhasil dihapus.');
    }
}
