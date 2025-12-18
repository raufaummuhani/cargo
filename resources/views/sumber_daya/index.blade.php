@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Bidang Sumber Daya Kesehatan Masyarakat</h1>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
<p><br>
    <a href="{{ route('sumber_daya.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                    <th>Bulan</th>
                <th>Tahun</th>
            
                <th>Rasio Dokter dengan Penduduk</th>
                <th>Rasio Dokter Spesialis dengan Penduduk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $it)
            <tr>
                <td>{{ $it->id }}</td>
                <td>{{ $it->month }}</td>
                <td>{{ $it->year }}</td>
                
                <td>{{ number_format($it->indeks_rasio_dokter_dengan_penduduk, 5, '.', '') }}</td>
                <td>{{ number_format($it->indeks_rasio_dokter_spesialis_dengan_penduduk , 5, '.', '') }}</td>
                <td>
                  
                    <a href="{{ route('sumber_daya.edit', $it) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('sumber_daya.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
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
