@extends('layouts.admin.main')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tracking Cargo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        body {
            background: #f5f7fa;
        }

        #map {
            height: 450px;
            width: 100%;
            border-radius: 10px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .badge-status {
            font-size: 14px;
            padding: 6px 12px;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- HEADER -->
    <div class="text-center mb-4">
        <h3>🚚 Tracking Pengiriman</h3>
        <p class="text-muted">Masukkan nomor resi untuk melihat posisi cargo</p>
    </div>

    <!-- FORM -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="GET" action="">
                <div class="row g-2">
                    <div class="col-md-10">
                        <input type="text" name="resi" class="form-control"
                               placeholder="Masukkan nomor resi"
                               value="{{ request('resi') }}">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Tracking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if(isset($tracking))

    <!-- INFO -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-3">
                    <h6>No Resi</h6>
                    <p class="fw-bold">{{ $tracking->cargo->no_resi }}</p>
                </div>
                <div class="col-md-3">
                    <h6>Status</h6>
                    <span class="badge bg-success badge-status">
                        {{ $tracking->status }}
                    </span>
                </div>
                      <div class="col-md-3">
                    <h6>Lokasi</h6>
                    <p>
                        {{ $tracking->lokasi }}
                    </p>
                </div>
                <div class="col-md-3">
                    <h6>Update Terakhir</h6>
                    <p>{{ $tracking->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- MAP -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div id="map"></div>
        </div>
    </div>

    @endif

</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

@if(isset($tracking))
<script>
    var lat = {{ $tracking->lat ?? -6.200000 }};
    var lng = {{ $tracking->lng ?? 106.816666 }};

    var map = L.map('map').setView([lat, lng], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup("Posisi Cargo")
        .openPopup();
</script>
@endif

</body>
</html>
@endsection