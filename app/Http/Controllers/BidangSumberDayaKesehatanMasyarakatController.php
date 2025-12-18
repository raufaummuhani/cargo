<?php

namespace App\Http\Controllers;

use App\Models\BidangSumberDayaKesehatanMasyarakat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBidangSumberDayaKesehatanRequest;
use App\Http\Requests\UpdateBidangSumberDayaKesehatanRequest;

class BidangSumberDayaKesehatanMasyarakatController extends Controller
{
    public function index()
    {
        $items = BidangSumberDayaKesehatanMasyarakat::orderBy('month','desc')->paginate(15);
        return view('sumber_daya.index', compact('items'));
    }

    public function create()
    {
        return view('sumber_daya.create');
    }

    public function store(StoreBidangSumberDayaKesehatanRequest $request)
    {
        BidangSumberDayaKesehatanMasyarakat::create($request->validated());
        return redirect()->route('sumber_daya.index')->with('success','Data tersimpan.');
    }

    public function show(BidangSumberDayaKesehatanMasyarakat $sumber_daya)
    {
        return view('sumber_daya.show', ['item' => $sumber_daya]);
    }

    public function edit(BidangSumberDayaKesehatanMasyarakat $sumber_daya)
    {
        return view('sumber_daya.edit', ['item' => $sumber_daya]);
    }

    public function update(UpdateBidangSumberDayaKesehatanRequest $request, BidangSumberDayaKesehatanMasyarakat $sumber_daya)
    {
        $sumber_daya->update($request->validated());
        return redirect()->route('sumber_daya.index')->with('success','Data diperbarui.');
    }

    public function destroy(BidangSumberDayaKesehatanMasyarakat $sumber_daya)
    {
        $sumber_daya->delete();
        return redirect()->route('sumber_daya.index')->with('success','Data dihapus.');
    }
}
