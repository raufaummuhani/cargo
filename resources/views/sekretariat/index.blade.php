@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h2>Data Sekretariat - Nilai SAKIP</h2>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <a href="{{ route('sekretariat.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Bulan</th>
                <th>Tahun</th>
             
                <th>Nilai SAKIP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->month }}</td>
                <td>{{ $d->year }}</td>
                <td>{{ $d->nilai_sakip }}</td>
                <td>
                                   <a href="{{ route('sekretariat.edit', $d) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sekretariat.destroy', $d) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links() }}
</div>
</div>
@endsection
