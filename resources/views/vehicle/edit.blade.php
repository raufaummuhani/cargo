@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
<div class="card">
    <div class="card-header">
        <h4>Edit Vehicle</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Vehicle</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $vehicle->name }}" required>
            </div>

            <div class="mb-3">
                <label>Nomor Polisi</label>
                <input type="text" name="nomor_polisi" class="form-control"
                       value="{{ $vehicle->nomor_polisi }}" required>
            </div>

            <div class="mb-3">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control"
                       value="{{ $vehicle->jenis }}" required>
            </div>

            <div class="mb-3">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control"
                       value="{{ $vehicle->merk }}" required>
            </div>

            <div class="mb-3">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control"
                       value="{{ $vehicle->warna }}" required>
            </div>

            <div class="mb-3">
                <label>Kapasitas (Kg)</label>
                <input type="number" name="kapasitas_kg" class="form-control"
                       value="{{ $vehicle->kapasitas_kg }}" required>
            </div>

           <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="available" {{ $vehicle->status == 'available' ? 'selected' : '' }}>Available</option>
            <option value="unavailable" {{ $vehicle->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
        </select>
    </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('vehicle.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection