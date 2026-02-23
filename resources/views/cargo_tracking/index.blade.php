@extends('layouts.admin.main')
@section('content')
<div class="container-fluid">

    <!-- HEADER -->
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="mb-0">
                📦 Tracking Cargo : <strong>{{ $cargo->id }}</strong>
            </h4>
            <br>
            <br>
             <a href="{{ route('cargo_tracking.create', $cargo->id) }}"
       class="btn btn-primary">
        ➕ Tambah Tracking
    </a>
        </div>
    </div>

    <!-- MAP -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <div id="map" style="height:450px; width:100%"></div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="card-header">
            <strong>Update Tracking</strong>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive" style="max-height:300px; overflow:auto">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Status</th>
                              <th>Lokasi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Keterangan</th>
                            <th>Waktu</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trackings as $t)
                        <tr onclick="focusMarker({{ $t->lat }}, {{ $t->lng }})"
                            style="cursor:pointer">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $t->status ?? 'Aktif' }}
                                </span>
                            </td>
                            <td>{{ $t->lokasi }}</td>
                            <td>{{ $t->lat }}</td>
                            <td>{{ $t->lng }}</td>
                            <td>{{ $t->keterangan }}</td>
                            <td>{{ $t->created_at }}</td>
                                    <td>
                    <a href="{{ route('cargo_tracking.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('cargo_tracking.destroy', $t->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
let map = L.map('map').setView(
    [{{ $trackings->first()->lat ?? -6.2 }},
     {{ $trackings->first()->lng ?? 106.8 }}], 13
);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
}).addTo(map);

// MARKERS + POLYLINE
let latlngs = [];
let markers = [];

@foreach($trackings as $t)
let marker = L.marker([{{ $t->latitude }}, {{ $t->longitude }}])
    .addTo(map)
    .bindPopup(`
        <b>{{ $t->keterangan }}</b><br>
        {{ $t->created_at }}
    `);

markers.push(marker);
latlngs.push([{{ $t->latitude }}, {{ $t->longitude }}]);
@endforeach

// ROUTE LINE
if(latlngs.length > 1){
    L.polyline(latlngs, { color: 'blue' }).addTo(map);
}

// FOCUS FROM TABLE
function focusMarker(lat, lng){
    map.setView([lat,lng], 16);
}
</script>
@endsection