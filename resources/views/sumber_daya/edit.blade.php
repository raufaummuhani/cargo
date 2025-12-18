@extends('layouts.admin.main')

@section('content')
<div class="section-header">

<div class="container">
    <h2>Edit Data</h2>

    @if($errors->any())
      <div class="alert alert-danger"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('sumber_daya.update', $item->id) }}" method="POST">
        @csrf @method('PUT')
 <div class="mb-3">
    <label for="month" class="form-label">Bulan</label>
    <select name="month" id="month" class="form-control">
        <option value="">-- Pilih Bulan --</option>
        @php
            $bulanList = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
        @endphp
        @foreach($bulanList as $bulan)
            <option value="{{ $bulan }}" {{ old('month') == $bulan ? 'selected' : '' }}>
                {{ $bulan }}
            </option>
        @endforeach
    </select>
    @error('bulan') <small class="text-danger">{{ $message }}</small> @enderror
</div>

        <div class="mb-3">
            <label>Tahun</label>
            <input name="year" class="form-control" value="{{ old('year', $item->year) }}" type="number">
        </div>
   
        <div class="mb-3">
            <label>Indeks Rasio Dokter dengan Penduduk</label>
            <input name="indeks_rasio_dokter_dengan_penduduk" class="form-control" value="{{ old('indeks_rasio_dokter_dengan_penduduk', $item->indeks_rasio_dokter_dengan_penduduk) }}" step="0.0001" type="number">
        </div>
        <div class="mb-3">
            <label>Indeks Rasio Dokter Spesialis dengan Penduduk</label>
            <input name="indeks_rasio_dokter_spesialis_dengan_penduduk" class="form-control" value="{{ old('indeks_rasio_dokter_spesialis_dengan_penduduk', $item->indeks_rasio_dokter_spesialis_dengan_penduduk) }}" step="0.0001" type="number">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('sumber_daya.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
</div>