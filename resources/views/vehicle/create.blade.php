@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
<div class="card">
    <div class="card-header">
        <h4>Tambah Data Vehicle</h4>
    </div>

    <div class="card-body">

        {{-- ERROR VALIDATION --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('vehicle.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Vehicle</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nomor Polisi</label>
                <input type="text" name="nomor_polisi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kapasitas (Kg)</label>
                <input type="number" name="kapasitas_kg" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('vehicle.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
