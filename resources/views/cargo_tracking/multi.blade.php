@extends('layouts.admin.main')
@section('content')
<div class="container py-4">

    <h4 class="mb-4">Multi Tracking Cargo (Real-Time)</h4>

       <div class="row">

        <!-- LIST RESI -->
        <div class="col-md-2">
<div style="position:absolute;top:2px;left:20px;background:#fff;padding:10px;border-radius:8px;">
    <b>Status</b><br>
    🟢 Sampai<br>
    🔵 Dikirim<br>
    🟠 Pending<br>
    🔴 Batal
</div>
        </div>
  

        <!-- LIST RESI -->
        <div class="col-md-3">

            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    Daftar Resi
                </div>

               
                <div class="card-body" style="max-height:500px;overflow:auto;">
                     
                    @foreach($shipments as $item)
                        <div class="mb-3 p-2 border rounded">
                            <strong>{{ $item->no_resi }}</strong><br>
                            {{ $item->pengirim }} → {{ $item->penerima }}
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

        <!-- MAP -->
        <div class="col-md-7">
            <div id="map" style="height:500px;" class="shadow"></div>
        </div>

    </div>
</div>

<!-- LEAFLET -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    var map = L.map('map').setView([-2.5, 118], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var markers = {};
    var polylines = {};

    // 🎨 Fungsi warna berdasarkan status
    function getColor(status) {
        status = status.toLowerCase();

        if (status.includes('sampai')) return 'green';
        if (status.includes('dikirim')) return 'blue';
        if (status.includes('pending')) return 'orange';
        if (status.includes('batal')) return 'red';

        return 'gray';
    }

    function loadTracking() {
        fetch('/api/tracking/latest')
            .then(res => res.json())
            .then(data => {

                data.forEach(item => {

                    if (!item.lat || !item.lng) return;

                    let color = getColor(item.status);

                    // 🔥 Marker custom warna
                    let icon = L.icon({
                        iconUrl: `https://maps.google.com/mapfiles/ms/icons/${color}-dot.png`,
                        iconSize: [32, 32]
                    });

                    // UPDATE / CREATE MARKER
                    if (markers[item.resi]) {
                        markers[item.resi].setLatLng([item.lat, item.lng]);
                        markers[item.resi].setIcon(icon);
                    } else {
                        markers[item.resi] = L.marker([item.lat, item.lng], {icon: icon})
                            .addTo(map)
                            .bindPopup(`
                                <b>Resi:</b> ${item.resi}<br>
                                <b>Status:</b> ${item.status}<br>
                                <b>Lokasi:</b> ${item.lokasi ?? '-'}<br>
                                <b>Waktu:</b> ${item.time ?? '-'}
                            `);
                    }

                    // 🔥 Polyline (jalur)
                    if (!polylines[item.resi]) {
                        polylines[item.resi] = L.polyline([[item.lat, item.lng]], {
                            color: color,
                            weight: 4
                        }).addTo(map);
                    } else {
                        polylines[item.resi].addLatLng([item.lat, item.lng]);
                        polylines[item.resi].setStyle({color: color});
                    }

                });

            });
    }

    // Load pertama
    loadTracking();

    // Refresh tiap 5 detik
    setInterval(loadTracking, 5000);
</script>

@endsection