@extends('layouts.admin.main')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3">📍 Laporan Cargo Berdasarkan Tujuan</h3>

    {{-- FILTER --}}
    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <label>Tanggal Awal</label>
                <input type="date" name="tanggal_awal" value="{{ $tanggalAwal }}" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Tanggal Akhir</label>
                <input type="date" name="tanggal_akhir" value="{{ $tanggalAkhir }}" class="form-control">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary w-100">Filter</button>
            </div>
        </div>
    </form>

    {{-- SUMMARY --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Total Pengiriman</h6>
                <h4>{{ $totalPengiriman }}</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Total Berat</h6>
                <h4>{{ $totalBerat }} kg</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Total Ongkir</h6>
                <h4>Rp {{ number_format($totalOngkir) }}</h4>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Tujuan</th>
                        <th>Total Pengiriman</th>
                        <th>Total Berat</th>
                        <th>Total Ongkir</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($rekapTujuan as $i => $row)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td><b>{{ $row->tujuan }}</b></td>
                        <td>{{ $row->total_pengiriman }}</td>
                        <td>{{ $row->total_berat }} kg</td>
                        <td>Rp {{ number_format($row->total_ongkir) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection