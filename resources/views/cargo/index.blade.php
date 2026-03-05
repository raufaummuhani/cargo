@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Data Cargo</h1><p><br>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
@if(auth()->user()->hasRole('admin'))
    <a href="{{ route('cargo.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    @endif
    @if(auth()->user()->hasRole('mitra'))
    <a href="{{ route('mitra.cargo.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    @endif
<div class="table-responsive" style="max-height:400px; overflow-y:auto">
    <table class="table table-bordered">

        <thead>
            <tr>
 <th>#</th>
        <th>No Resi</th>
        <th>Nama Barang</th>
        <th>Pengirim</th>
        <th>Penerima</th>
        <th>jenis_pengiriman</th>
  <th>Driver</th>
  <th>Kendaraan</th>
                <th>Asal</th>
  <th>Tujuan</th>
    
                <th>Berat (kg)</th>
  <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cargos as $it)
            <tr>
  <td>{{ $it->id }}</td>
                <td>{{ $it->no_resi }}</td>
                 <td>{{ $it->name }}</td>
                <td>{{ $it->pengirim }}</td>
                <td>{{ $it->penerima }}</td>
                <td>{{ $it->jenis_pengiriman }}</td>
                <td>{{ $it->driver->name ?? 'N/A' }}</td>
                <td>{{ $it->vehicle->jenis ?? 'N/A' }}</td>
                <td>{{ $it->asal }}</td>
                <td>{{ $it->tujuan }}</td>
                <td>{{ $it->berat }}</td>
                <td>{{ $it->status }}</td>
                <td>
                   

@role('super-admin')
 <a href="{{ route('cargo.edit', $it) }}" class="btn btn-warning btn-sm">Edit</a>
                     <a href="{{ route('surat-jalan.show', $it) }}" class="btn btn-info btn-sm">Detail</a>

 <a href="{{ route('cargo_tracking.index', $it->id) }}"
           style="padding:5px 10px;background:#28a745;color:#fff;text-decoration:none">
            📍 Tracking
        </a>
         <form action="{{ route('driver.cargo.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
@endrole
@role('admin')
 <a href="{{ route('mitra.cargo.edit', $it) }}" class="btn btn-warning btn-sm">Edit</a>
                     <a href="{{ route('surat-jalan.show', $it) }}" class="btn btn-info btn-sm">Detail</a>

 <a href="{{ route('mitra.cargo_tracking.index', $it->id) }}"
           style="padding:5px 10px;background:#28a745;color:#fff;text-decoration:none">
            📍 Tracking
        </a>
         <form action="{{ route('driver.cargo.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
@endrole
@role('mitra')
 <a href="{{ route('mitra.cargo.edit', $it) }}" class="btn btn-warning btn-sm">Edit</a>
                     <a href="{{ route('surat-jalan.show', $it) }}" class="btn btn-info btn-sm">Detail</a>

 <a href="{{ route('mitra.cargo_tracking.index', $it->id) }}"
           style="padding:5px 10px;background:#28a745;color:#fff;text-decoration:none">
            📍 Tracking
        </a>
         <form action="{{ route('cargo.destroy', $it) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
@endrole

 <a href="{{ route('cargo_tracking.index', $it->id) }}"
           style="padding:5px 10px;background:#28a745;color:#fff;text-decoration:none">
            📍 Tracking
        </a>
                                        
                </td>
            </tr>
            @empty
            <tr><td colspan="6">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
    {{ $cargos->links() }}
</div>
</div>
@endsection
