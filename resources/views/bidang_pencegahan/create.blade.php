@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h2>Tambah Data Bidang Pencegahan Penyakit Menular</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('bidang_pencegahan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Bulan</label>
            <select name="month" class="form-control" required>
                <option value="">-- Pilih Bulan --</option>
                @foreach(['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $b)
                    <option value="{{ $b }}" {{ old('month') == $b ? 'selected' : '' }}>{{ $b }}</option>
                @endforeach
            </select>
        </div>
<div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="year" class="form-control" value="{{ old('year') }}">
        </div>

        <div class="mb-3">
            <label>Persentase Pelayanan Kesehatan Bagi Penduduk Pada Kondisi KLB (%)</label>
            <input type="number" name="persentase_pelayanan_klb" class="form-control" step="0.01" value="{{ old('persentase_pelayanan_klb') }}" required>
        </div>

        <div class="mb-3">
            <label>Temuan Kasus TB</label>
            <input type="number" name="temuan_kasus_tb" class="form-control" value="{{ old('temuan_kasus_tb') }}" required>
        </div>

        <div class="mb-3">
            <label>Persentase Imunisasi Dasar (%)</label>
            <input type="number" name="persentase_imunisasi_dasar" class="form-control" step="0.01" value="{{ old('persentase_imunisasi_dasar') }}" required>
        </div>

        <div class="mb-3">
            <label>Pengendalian Konsumsi Merokok pada Usia 10-18 Tahun (%)</label>
            <input type="number" name="pengendalian_merokok_usia_10_18" class="form-control" step="0.01" value="{{ old('pengendalian_merokok_usia_10_18') }}" required>
        </div>

        <div class="mb-3">
            <label>Persentase Penanganan Krisis Kesehatan (%)</label>
            <input type="number" name="persentase_penanganan_krisis" class="form-control" step="0.01" value="{{ old('persentase_penanganan_krisis_kesehatan') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bidang_pencegahan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
