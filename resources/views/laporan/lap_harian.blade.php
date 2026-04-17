@extends('layouts.admin.main')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3">📊 Laporan Pengiriman Harian</h3>

    {{-- FILTER --}}
    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="date" name="tanggal" value="{{ $tanggal }}" class="form-control">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Filter</button>
            </div>
                      <div class="col-md-2">
                <button class="btn btn-success w-100">Print</button>
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

    {{-- STATUS --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5>Status Pengiriman</h5>
            <div class="row">
                @foreach($status as $s => $jumlah)
                <div class="col-md-3">
                    <div class="alert alert-info text-center">
                        <b>{{ strtoupper($s) }}</b><br>
                        {{ $jumlah }}
                    </div>
                </div>
                @endforeach
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
                        <th>Resi</th>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Rute</th>
                        <th>Berat</th>
                        <th>Ongkir</th>
                        <th>Status</th>
                        <th>Lokasi Terakhir</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $i => $row)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td><b>{{ $row->no_resi }}</b></td>
                        <td>{{ $row->pengirim }}</td>
                        <td>{{ $row->penerima }}</td>
                        <td>{{ $row->asal }} → {{ $row->tujuan }}</td>
                        <td>{{ $row->berat }} kg</td>
                        <td>Rp {{ number_format($row->total) }}</td>
                        <td>
                            <span class="badge bg-success">
                                {{ $row->lastTracking->status ?? 'Belum Update' }}
                            </span>
                        </td>
                        <td>{{ $row->lastTracking->lokasi ?? '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection