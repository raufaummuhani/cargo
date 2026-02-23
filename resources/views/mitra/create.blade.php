@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
<div class="card">
    <div class="card-header">
        <h4>Tambah Data Mitra</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mitra">Nama Mitra</label>
                <input type="text" class="form-control" id="nama_mitra" name="nama_mitra" required>
                </div>
                 <div class="form-group">
         <label>User</label>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
               <button type="submit">Simpan</button>
</form>
    </div>
</div>
@endsection