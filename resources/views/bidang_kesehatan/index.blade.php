@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Bidang Kesehatan Masyarakat</h1><p><br>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('bidang_kesehatan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
</p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                  <th>Bulan</th>
              
                <th>Angka Kematian Ibu (per 100.000)</th>
                <th>Angka Kematian Bayi (per 1.000)</th>
                <th>Prevalensi Stunting (%)</th>
                <th>Cakupan ASI Eksklusif (%)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $it)
            <tr>
                <td>{{ $it->id }}</td>
                <td>{{ $it->year }}</td>
                         <td>{{ $it->month }}</td>

                <td>{{ $it->angka_kematian_ibu_per_100000 }}</td>
                <td>{{ $it->angka_kematian_bayi_per_1000 }}</td>
                <td>{{ $it->prevalensi_stunting }}</td>
                <td>{{ $it->cakupan_asi_eksklusif }}</td>
                <td>
                  
                    <a href="{{ route('bidang_kesehatan.edit', $it) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('bidang_kesehatan.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $items->links() }}
</div>
</div>
@endsection
