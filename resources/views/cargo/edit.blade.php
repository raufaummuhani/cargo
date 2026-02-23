@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Edit Data Cargo</h1>

    <form action="{{ route('cargo.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="driver_id" class="form-label">Driver</label>
            <select name="driver_id" id="driver_id" class="form-control">
                <option value="">-- Pilih Driver --</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}" {{ old('driver_id', $item->driver_id) == $driver->id ? 'selected' : '' }}>
                        {{ $driver->nama }}
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
                    <option value="{{ $vehicle->id }}" {{ old('vehicle_id', $item->vehicle_id) == $vehicle->id ? 'selected' : '' }}>
                        {{ $vehicle->nomor_polisi }}
                    </option>
                @endforeach
            </select>
            @error('vehicle_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="pengirim" class="form-label">Pengirim</label>
            <input type="text" name="pengirim" id="pengirim" class="form-control" value="{{ old('pengirim', $item->pengirim) }}">
            @error('pengirim') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" name="penerima" id="penerima" class="form-control" value="{{ old('penerima', $item->penerima) }}">
            @error('penerima') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <div class="mb-3">
            <label for="jenis_pengiriman" class="form-label">Jenis Pengiriman</label>
            <input type="text" name="jenis_pengiriman" id="jenis_pengiriman" class="form-control" value="{{ old('jenis_pengiriman', $item->jenis_pengiriman) }}">
            @error('jenis_pengiriman') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="asal" class="form-label">Asal</label>
            <input type="text" name="asal" id="asal" class="form-control" value="{{ old('asal', $item->asal) }}">
            @error('asal') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" id="tujuan" class="form-control" value="{{ old('tujuan', $item->tujuan) }}">
            @error('tujuan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" name="berat" id="berat" class="form-control" value="{{ old('berat', $item->berat) }}">
            @error('berat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
      <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                @foreach(['pending','proses','transit','sampai','diterima'] as $s)
                    <option value="{{ $s }}" {{ $item->status==$s?'selected':'' }}>
                        {{ $s }}
                    </option>
                @endforeach
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
@endforeach
</select><br><br>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bidang_pelayanan_kesehatan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection