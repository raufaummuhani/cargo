@extends('layouts.admin.main')

@section('content')
<div class="section-header">
    <div class="container">
        
    <h1>Tambah Data Bidang Kesehatan</h1><p>

    @if($errors->any())
      <div class="alert alert-danger">
         <ul>
           @foreach($errors->all() as $err) <li>{{ $err }}</li> @endforeach
         </ul>
      </div>
    @endif

    <form action="{{ route('bidang_kesehatan.store') }}" method="POST">
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
            <input name="year" value="{{ old('year') }}" class="form-control" type="number">
        </div>
  
        <div class="mb-3">
            <label>Angka Kematian Ibu (per 100.000)</label>
            <input name="angka_kematian_ibu_per_100000" value="{{ old('angka_kematian_ibu_per_100000') }}" class="form-control" step="0.01" type="number">
        </div>
        <div class="mb-3">
            <label>Angka Kematian Bayi (per 1.000)</label>
            <input name="angka_kematian_bayi_per_1000" value="{{ old('angka_kematian_bayi_per_1000') }}" class="form-control" step="0.01" type="number">
        </div>
        <div class="mb-3">
            <label>Prevalensi Stunting (%)</label>
            <input name="prevalensi_stunting" value="{{ old('prevalensi_stunting') }}" class="form-control" step="0.01" type="number" min="0" max="100">
        </div>
        <div class="mb-3">
            <label>Cakupan ASI Eksklusif (%)</label>
            <input name="cakupan_asi_eksklusif" value="{{ old('cakupan_asi_eksklusif') }}" class="form-control" step="0.01" type="number" min="0" max="100">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('bidang_kesehatan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
