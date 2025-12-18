@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h3>Tambah User</h3>
        @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
<p><br>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<form method="POST" action="{{ route('user.store') }}">
          @csrf

          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
          </div>

          <div class="row gx-2">
            <div class="mb-3 col-md-6">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Daftar Sebagai</label>
            <select name="role" class="form-select" required>
              <option value="">-- Pilih Role --</option>
              <option value="user" {{ old('role')=='user' ? 'selected' : '' }}>User</option>
              <option value="admin" {{ old('role')=='admin' ? 'selected' : '' }}>Admin</option>
            </select>
         
          </div>

          <div class="d-grid gap-2">
            <button class="btn btn-primary">Daftar Sekarang</button>
            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Batal</a>
          </div>
        </form>
      
</div>
@endsection
