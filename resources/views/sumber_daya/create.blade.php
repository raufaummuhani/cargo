@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h2>Tambah Bidang Sumber Daya Kesehatan</h2>

    @if($errors->any())
      <div class="alert alert-danger"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('sumber_daya.store') }}" method="POST">
        @csrf
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
            <input name="year" class="form-control" value="{{ old('year') }}" type="number">
        </div>
   
        <div class="mb-3">
            <label>Indeks Rasio Dokter dengan Penduduk</label>
            <input name="indeks_rasio_dokter_dengan_penduduk" class="form-control" value="{{ old('indeks_rasio_dokter_dengan_penduduk') }}" step="0.00001" type="number">
            <small class="text-muted">Isi angka rasio (contoh: 0.8500)</small>
        </div>
        <div class="mb-3">
            <label>Indeks Rasio Dokter Spesialis dengan Penduduk</label>
            <input name="indeks_rasio_dokter_spesialis_dengan_penduduk" class="form-control" value="{{ old('indeks_rasio_dokter_spesialis_dengan_penduduk') }}" step="0.00001" type="number">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('sumber_daya.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection