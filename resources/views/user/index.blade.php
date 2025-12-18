@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h3>Daftar Admin</h3>
        @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
<p><br>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Data</a>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                  <th>Role</th>

                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->role }}</td>
                <td>
                    <a href="{{ route('user.edit', $u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                           <form action="{{ route('user.destroy', $u->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
</div>
@endsection
