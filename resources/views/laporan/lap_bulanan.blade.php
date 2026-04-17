@extends('layouts.admin.main')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3">📊 Laporan Pengiriman Bulanan</h3>

    {{-- FILTER --}}
    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="month" name="bulan" value="{{ $bulan }}" class="form-control">
            </div>
            <div class="col-md-2">
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

    {{-- REKAP HARIAN --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body table-responsive">
            <h5>📅 Rekap Harian</h5>

            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Tanggal</th>
                        <th>Pengiriman</th>
                        <th>Berat</th>
                        <th>Ongkir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($rekapHarian as $r)
                    <tr>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->total_pengiriman }}</td>
                        <td>{{ $r->total_berat }} kg</td>
                        <td>Rp {{ number_format($r->total_ongkir) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    {{-- REKAP STATUS --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5>📦 Rekap Status</h5>

            <div class="row">
                @foreach($rekapStatus as $status => $jumlah)
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                        <b>{{ strtoupper($status) }}</b><br>
                        {{ $jumlah }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    {{-- TABLE DETAIL --}}
    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <h5>Detail Pengiriman</h5>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Resi</th>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Rute</th>
                        <th>Berat</th>
                        <th>Ongkir</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $i => $row)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td><b>{{ $row->no_resi }}</b></td>
                        <td>{{ $row->pengirim }}</td>
                        <td>{{ $row->penerima }}</td>
                        <td>{{ $row->asal }} → {{ $row->tujuan }}</td>
                        <td>{{ $row->berat }} kg</td>
                        <td>Rp {{ number_format($row->total) }}</td>
                        <td>
                            {{ $row->latestTracking->status ?? 'Belum Update' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection