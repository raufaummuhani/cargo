@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h4 class="mb-4">📊 Data Bidang Pencegahan Penyakit Menular</h4>

    <a href="{{ route('bidang_pencegahan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
  <th>ID</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>% Pelayanan KLB</th>
                <th>Kasus TB</th>
                <th>% Imunisasi Dasar</th>
                <th>% Pengendalian Merokok Usia 10–18 tahun</th>
                <th>% Penanganan Krisis Kesehatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $it)
                <tr>

                    <td>{{ $it->id}}</td>
                    <td>{{ $it->month }}</td>
                    <td>{{ $it->year }}</td>
                    <td>{{ $it->persentase_pelayanan_klb }}</td>
                    <td>{{ $it->temuan_kasus_tb }}</td>
                    <td>{{ $it->persentase_imunisasi_dasar }}</td>
                    <td>{{ $it->pengendalian_merokok_usia_10_18 }}</td>
                    <td>{{ $it->persentase_penanganan_krisis }}</td>
                    <td>
                        <a href="{{ route('bidang_pencegahan.edit', $it) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('bidang_pencegahan.destroy', $it->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection