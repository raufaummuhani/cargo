@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h3>Edit Admin</h3>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
        </div>
           <div class="mb-3">
            <label>Role</label>
            <input type="text" class="form-control" name="role" value="{{ $user->role }}" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}">
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
