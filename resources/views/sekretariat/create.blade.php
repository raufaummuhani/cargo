@extends('layouts.admin.main')

@section('content')
<div class="section-header">

<div class="container">
    <h2>Tambah Data Sekretariat</h2>

    @if($errors->any())
        <div class="alert alert-danger"><ul>@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('sekretariat.store') }}" method="POST">
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
            <input type="number" name="year" class="form-control" value="{{ old('year') }}">
        </div>


        <div class="mb-3">
            <label>Nilai SAKIP</label>
            <input type="number" step="0.01" name="nilai_sakip" class="form-control" value="{{ old('nilai_sakip') }}">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('sekretariat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</div>
@endsection
