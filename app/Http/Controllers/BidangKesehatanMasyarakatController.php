<?php
namespace App\Http\Controllers;

use App\Models\BidangKesehatanMasyarakat;
use App\Http\Requests\StoreBidangKesehatanRequest;
use App\Http\Requests\UpdateBidangKesehatanRequest;

class BidangKesehatanMasyarakatController extends Controller
{
    public function index()
    {
        $items = BidangKesehatanMasyarakat::orderBy('month','desc')->paginate(15);
        return view('bidang_kesehatan.index', compact('items'));
    }

    public function create()
    {
        return view('bidang_kesehatan.create');
    }

    public function store(StoreBidangKesehatanRequest $request)
    {
        BidangKesehatanMasyarakat::create($request->validated());
        return redirect()->route('bidang_kesehatan.index')->with('success','Data tersimpan.');
    }

    public function show(BidangKesehatanMasyarakat $bidang_kesehatan)
    {
        return view('bidang_kesehatan.show', ['item' => $bidang_kesehatan]);
    }

    public function edit(BidangKesehatanMasyarakat $bidang_kesehatan)
    {
        return view('bidang_kesehatan.edit', ['item' => $bidang_kesehatan]);
    }

   public function update(UpdateBidangKesehatanRequest $request, BidangKesehatanMasyarakat $bidang_kesehatan)
{
    $bidang_kesehatan->update($request->validated());
    return redirect()->route('bidang_kesehatan.index')->with('success', 'Data berhasil diperbarui.');
}

    public function destroy(BidangKesehatanMasyarakat $bidang_kesehatan)
    {
        $bidang_kesehatan->delete();
        return redirect()->route('bidang_kesehatan.index')->with('success','Data dihapus.');
    }
}
