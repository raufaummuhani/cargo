<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    // =========================================================
    // ADMIN — CRUD
    // =========================================================

    /**
     * Tampilkan semua data mitra (admin)
     */
    public function index()
    {
        $mitras = Mitra::with('user')->paginate(10);
        return view('mitra.index', compact('mitras'));
    }

    /**
     * Form tambah mitra (admin)
     */
    public function create()
    {
        $users = User::all();
        return view('mitra.create', compact('users'));
    }

    /**
     * Simpan mitra baru dari form admin
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mitra'        => 'required|string|max:255',
            'user_id'           => 'required|exists:users,id',
            'nama_pic'          => 'nullable|string|max:150',
            'email'             => 'nullable|email|max:150',
            'whatsapp'          => 'nullable|string|max:20',
            'jenis_bisnis'      => 'nullable|string|max:100',
            'volume_pengiriman' => 'nullable|string|max:100',
            'alamat'            => 'nullable|string',
            'status'            => 'nullable|string|max:50',
        ]);

        Mitra::create($request->only([
            'nama_mitra', 'user_id', 'nama_pic', 'email',
            'whatsapp', 'jenis_bisnis', 'volume_pengiriman', 'alamat', 'status',
        ]));

        return redirect()
            ->route('mitra.index')
            ->with('success', 'Mitra berhasil ditambahkan');
    }

    /**
     * Form edit mitra (admin)
     */
    public function edit(Mitra $mitra)
    {
        $users = User::all();
        return view('mitra.edit', compact('mitra', 'users'));
    }

    /**
     * Update data mitra (admin)
     */
    public function update(Request $request, Mitra $mitra)
    {
        $request->validate([
            'nama_mitra'        => 'required|string|max:255',
            'user_id'           => 'required|exists:users,id',
            'nama_pic'          => 'nullable|string|max:150',
            'email'             => 'nullable|email|max:150',
            'whatsapp'          => 'nullable|string|max:20',
            'jenis_bisnis'      => 'nullable|string|max:100',
            'volume_pengiriman' => 'nullable|string|max:100',
            'alamat'            => 'nullable|string',
            'status'            => 'nullable|string|max:50',
        ]);

        $mitra->update($request->only([
            'nama_mitra', 'user_id', 'nama_pic', 'email',
            'whatsapp', 'jenis_bisnis', 'volume_pengiriman', 'alamat', 'status',
        ]));

        return redirect()
            ->route('mitra.index')
            ->with('success', 'Mitra berhasil diupdate');
    }

    /**
     * Hapus data mitra (admin)
     */
    public function destroy(Mitra $mitra)
    {
        $mitra->delete();

        return redirect()
            ->route('mitra.index')
            ->with('success', 'Mitra berhasil dihapus');
    }

    // =========================================================
    // PUBLIK — Halaman & Form Kemitraan
    // =========================================================

    /**
     * Tampilkan halaman form kemitraan publik
     */
    public function kemitraanPage()
    {
        return view('kemitraan');
    }

    /**
     * Terima pengajuan dari form publik, simpan ke tabel mitras
     * user_id dikosongkan dulu (null) — admin bisa assign nanti
     */
    public function kemitraanStore(Request $request)
    {
        $validated = $request->validate([
            'nama_mitra'        => 'required|string|max:255',
            'nama_pic'          => 'required|string|max:150',
            'email'             => 'required|email|max:150',
            'whatsapp'          => 'required|string|max:20',
            'jenis_bisnis'      => 'required|string|max:100',
            'volume_pengiriman' => 'required|string|max:100',
            'alamat'            => 'required|string',
        ]);

        // user_id null dulu, status default 'Diproses'
        Mitra::create(array_merge($validated, [
            'user_id' => null,
            'status'  => 'Diproses',
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Pengajuan kemitraan berhasil dikirim!',
        ]);
    }
}