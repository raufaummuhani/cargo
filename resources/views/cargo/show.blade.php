<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat Jalan Cargo</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; }
        .table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table th, .table td {
            border: 1px solid #000;
            padding: 6px;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>SURAT JALAN ADYAT CARGO</h2>
    <p>No: SJ-{{ $cargo->id }}/{{ date('Y') }}</p>
</div>

<table class="table">
    <tr>
        <th>Tanggal</th>
        <td>{{ now()->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <th>Pengirim</th>
        <td>{{ $cargo->pengirim }}</td>
    </tr>
    <tr>
        <th>Penerima</th>
        <td>{{ $cargo->penerima }}</td>
    </tr>
    <tr>
        <th>Alamat Tujuan</th>
        <td>{{ $cargo->tujuan }}</td>
    </tr>
</table>

<table class="table">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Berat (Kg)</th>
            <th>Tarif Per Kg</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $cargo->name }}</td>
            <td>{{ $cargo->berat }}</td>
            <td>{{ $cargo->tarif_per_kg }}/ Kg</td>
            <td>{{ $cargo->total }}</td>
        </tr>
    </tbody>
</table>

<table class="table">
    <tr>
        <th>Driver</th>
        <td>{{ $cargo->driver->name ?? '-' }}</td>
    </tr>
    <tr>
        <th>Kendaraan</th>
        <td>{{ $cargo->vehicle->jenis ?? '-' }}</td>
    </tr>
</table>

<div class="signature">
    <p>{{ now()->format('d-m-Y') }}</p>
    <br><br>
    <p>(_____________________)</p>
    <p>Petugas Gudang</p>
</div>

</body>
</html>
