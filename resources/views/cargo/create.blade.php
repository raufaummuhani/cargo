@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Tambah Data Cargo</h1>

    <form action="{{ route('cargo.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="driver_id" class="form-label">Driver</label>
            <select name="driver_id" id="driver_id" class="form-control">
                <option value="">-- Pilih Driver --</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}" {{ old('driver_id') == $driver->id ? 'selected' : '' }}>
                        {{ $driver->name }}
                    </option>
                @endforeach
            </select>
            @error('driver_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="vehicle_id" class="form-label">Kendaraan</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control">
                <option value="">-- Pilih Kendaraan --</option>
                @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->id }}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : '' }}>
                        {{ $vehicle->nomor_polisi }}
                    </option>
                @endforeach
            </select>
            @error('vehicle_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="pengirim" class="form-label">Pengirim</label>
            <input type="text" name="pengirim" id="pengirim" class="form-control" value="{{ old('pengirim') }}" placeholder="Nama Pengirim">
            @error('pengirim') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" name="penerima" id="penerima" class="form-control" value="{{ old('penerima') }}" placeholder="Nama Penerima">
            @error('penerima') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
       <div class="mb-3">
    <label>Jenis Pengiriman</label>
    <select name="jenis_pengiriman" id="jenis" class="form-control" required>
        <option value="">-- Pilih Jenis Pengiriman --</option>
        <option value="FTL">FTL (Full Truck Load)</option>
        <option value="FCL">FCL (Full Container Load)</option>
        <option value="Kurir">Kurir</option>

    </select>
</div>

        <div class="mb-3">
            <label for="asal" class="form-label">Asal</label>
            <input type="text" name="asal" id="asal" class="form-control" value="{{ old('asal') }}" placeholder="Asal">
            @error('asal') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" id="tujuan" class="form-control" value="{{ old('tujuan') }}" placeholder="Tujuan">
            @error('tujuan') <small class="text-danger">{{ $message }}</small> @enderror

        </div>
          <div class="mb-3">
            <label for="tarif_per_kg" class="form-label">Tarif Per Kg</label>
            <input type="number" name="tarif_per_kg" id="tarif_per_kg" class="form-control" value="{{ old('tarif_per_kg') }}" placeholder="Tarif Per Kg">
            @error('tarif_per_kg') <small class="text-danger">{{ $message }}</small> @enderror

        </div>
        <div class="mb-3">
            <label for="kapasitas_kg" class="form-label">Kapasitas (kg)</label>
            <input type="number" name="kapasitas_kg" id="kapasitas_kg" class="form-control" value="{{ old('kapasitas_kg') }}" placeholder="Kapasitas dalam kg">
            @error('kapasitas_kg') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" name="total" id="total" class="form-control" value="{{ old('total') }}" placeholder="Total" readonly>
            @error('total') <small class="text-danger">{{ $message }}</small> @enderror
</div>
        <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('cargo.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
@push('scripts')
<script>
const tarif = {
    FTL: 4000,
    FCL: 6000,
    Kurir: 3000
};

function hitungTotal() {
    let berat = parseFloat(document.getElementById('kapasitas_kg').value) || 0;
    let tarifKg = parseFloat(document.getElementById('tarif_per_kg').value) || 0;

    let total = berat * tarifKg;
    document.getElementById('total').value =
        total.toLocaleString('id-ID');
}

document.getElementById('jenis').addEventListener('change', function () {
    let jenis = this.value;

    if (jenis) {
        document.getElementById('tarif_per_kg').value = tarif[jenis];
    
    } else {
        document.getElementById('tarif_per_kg').value = '';
    }

    hitungTotal();
});

document.getElementById('kapasitas_kg').addEventListener('input', hitungTotal);
</script>

@endpush