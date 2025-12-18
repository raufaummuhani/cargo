@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Bidang Pelayanan Kesehatan Masyarakat</h1><p><br>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('bidang_pelayanan_kesehatan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
 <th>#</th>
                <th>Tahun</th>
                <th>Bulan</th>
                
                <th>Persentase Fasyankes Terakreditasi (%)</th>
                <th>Rumah Sakit Terakreditasi</th>
                <th>Puskesmas Terakreditasi Madya</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $it)
            <tr>
  <td>{{ $it->id }}</td>
                <td>{{ $it->year }}</td>
                <td>{{ $it->month }}</td>
            
                <td>{{ $it->persentase_fasyankes_terakreditasi }}</td>
                <td>{{ $it->jumlah_rs_terakreditasi }}</td>
                <td>{{ $it->jumlah_puskesmas_terakreditasi_madya }}</td>
                <td>
                    <a href="{{ route('bidang_pelayanan_kesehatan.edit', $it) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('bidang_pelayanan_kesehatan.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $items->links() }}
</div>
</div>
@endsection
