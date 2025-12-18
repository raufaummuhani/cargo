@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h2>Edit Data Bidang Pencegahan Penyakit Menular</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('bidang_pencegahan.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

   
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
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $item->year) }}">
            @error('year') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="form-group">
            <label>Persentase Pelayanan Kesehatan Bagi Penduduk Pada Kondisi KLB (%)</label>
            <input type="number" step="0.01" name="persentase_pelayanan_klb" class="form-control" value="{{ old('persentase pelayanan_klb', $item->persentase_pelayanan_klb) }}" required>
        </div>

        <div class="form-group">
            <label>Temuan Kasus TB</label>
            <input type="number" name="temuan_kasus_tb" class="form-control" value="{{ old('temuan_kasus_tb', $item->temuan_kasus_tb) }}" required>
        </div>

        <div class="form-group">
            <label>Persentase Imunisasi Dasar (%)</label>
            <input type="number" step="0.01" name="persentase_imunisasi_dasar" class="form-control" value="{{ old('persentase_imunisasi_dasar',$item->persentase_imunisasi_dasar) }}" required>
        </div>

        <div class="form-group">
            <label>Pengendalian Konsumsi Merokok Usia 10–18 Tahun (%)</label>
            <input type="number" step="0.01" name="pengendalian_merokok_usia_10_18" class="form-control" value="{{ old('pengendalian_merokok_usia_10_18', $item->pengendalian_merokok_usia_10_18) }}" required>
        </div>

        <div class="form-group">
            <label>Persentase Penanganan Krisis Kesehatan (%)</label>
            <input type="number" step="0.01" name="persentase_penanganan_krisis" class="form-control" value="{{ old('persentase_penanganan_krisis', $item->persentase_penanganan_krisis) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('bidang_pencegahan.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
