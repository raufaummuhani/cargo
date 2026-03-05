@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Data Vehicle</h1><p><br>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif<a href="{{ route('vehicle.create') }}" class="mb-3 btn btn-primary">Tambah Vehicle</a>
<div class="table-responsive" style="max-height:400px; overflow-y:auto">
<table class="table table-bordered">
    <tr>
               <th>No</th>
        <th>Nama</th>
        <th>No Polisi</th>
        <th>Jenis</th>
        <th>Merk</th>
        <th>Kapasitas (Kg)</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($vehicle as $v)
    <tr>
          <td>{{ $loop->iteration }}</td>
        <td>{{ $v->name }}</td>
        <td>{{ $v->nomor_polisi }}</td>
        <td>{{ $v->jenis }}</td>
        <td>{{ $v->merk }}</td>
        <td>{{ $v->kapasitas_kg }}</td>
        <td>{{ $v->status }}</td>
        <td>
            <a href="{{ route('vehicle.edit', $v->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('vehicle.destroy', $v->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $vehicle->links() }}

</div>
</div>
@endsection
