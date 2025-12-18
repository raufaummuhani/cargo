@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Tambah Data Bidang Pelayanan Kesehatan Masyarakat</h1>

    <form action="{{ route('bidang_pelayanan_kesehatan.store') }}" method="POST">
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
            <option value="{{ $bulan }}" {{ old('bulan') == $bulan ? 'selected' : '' }}>
                {{ $bulan }}
            </option>
        @endforeach
    </select>
    @error('bulan') <small class="text-danger">{{ $message }}</small> @enderror
</div>

        <div class="mb-3">
            <label for="year" class="form-label">Tahun</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}" placeholder="Contoh: 2025">
            @error('year') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        


        <div class="mb-3">
            <label for="persentase_fasyankes_terakreditasi" class="form-label">Persentase Fasilitas Kesehatan Terakreditasi (%)</label>
            <input type="number" step="0.01" name="persentase_fasyankes_terakreditasi" id="persentase_fasyankes_terakreditasi" class="form-control" value="{{ old('persentase_fasyankes_terakreditasi') }}" placeholder="Contoh: 87.5">
            @error('persentase_fasyankes_terakreditasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah_rs_terakreditasi" class="form-label">Jumlah Rumah Sakit Terakreditasi</label>
            <input type="number" name="jumlah_rs_terakreditasi" id="jumlah_rs_terakreditasi" class="form-control" value="{{ old('jumlah_rs_terakreditasi') }}" placeholder="Contoh: 12">
            @error('jumlah_rs_terakreditasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah_puskesmas_terakreditasi_madya" class="form-label">Jumlah Puskesmas Terakreditasi Madya</label>
            <input type="number" name="jumlah_puskesmas_terakreditasi_madya" id="jumlah_puskesmas_terakreditasi_madya" class="form-control" value="{{ old('jumlah_puskesmas_terakreditasi_madya') }}" placeholder="Contoh: 25">
            @error('jumlah_puskesmas_terakreditasi_madya') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bidang_pelayanan_kesehatan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
