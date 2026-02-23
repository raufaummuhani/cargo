@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
    <h1>Edit Data Cargo</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

    <form action="{{ route('cargo_tracking.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
                <input type="hidden" name="cargo_id" value="{{ $item->cargo_id }}">

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ old('lokasi', $item->lokasi) }}" placeholder="Lokasi">
            @error('lokasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan', $item->keterangan) }}">
            @error('keterangan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" name="lat" id="lat" class="form-control" value="{{ old('lat', $item->lat) }}">
            @error('lat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" name="lng" id="lng" class="form-control" value="{{ old('lng', $item->lng) }}">
            @error('lng') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
      <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                @foreach(['pending','proses','transit','sampai','diterima'] as $s)
                    <option value="{{ $s }}" {{ $item->status==$s?'selected':'' }}>
                        {{ $s }}
                    </option>
                @endforeach
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bidang_pelayanan_kesehatan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

<div id="map" style="height:450px"></div>
</div>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"/>

<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<script>
let map = L.map('map').setView([-6.2, 106.8], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution:'© OpenStreetMap'
}).addTo(map);

let marker;

// SEARCH CONTROL
L.Control.geocoder({
    defaultMarkGeocode: false,
    placeholder: 'Cari lokasi...'
})
.on('markgeocode', function(e) {
    let latlng = e.geocode.center;

    document.getElementById('lat').value = latlng.lat;
    document.getElementById('lng').value = latlng.lng;

    if(marker){
        marker.setLatLng(latlng);
    }else{
        marker = L.marker(latlng, { draggable:true }).addTo(map);
    }

    map.setView(latlng, 16);
})
.addTo(map);
function setLocation(latlng) {
    if (!marker) {
        marker = L.marker(latlng, { draggable: true }).addTo(map);
        marker.on('dragend', e => {
            const pos = e.target.getLatLng();
            setLocation(pos);
        });
    } else {
        marker.setLatLng(latlng);
    }

    document.getElementById('lat').value = latlng.lat.toFixed(7);
    document.getElementById('lng').value = latlng.lng.toFixed(7);

    reverseGeocode(latlng.lat, latlng.lng);
}

map.on('click', e => setLocation(e.latlng));

// GPS otomatis (opsional)
function getCurrentLocation(){
    navigator.geolocation.getCurrentPosition(function(pos){
        let lat = pos.coords.latitude;
        let lng = pos.coords.longitude;

        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;

        if(marker){
            marker.setLatLng([lat,lng]);
        }else{
            marker = L.marker([lat,lng], { draggable:true }).addTo(map);
        }

        map.setView([lat,lng], 16);
    });
}

getCurrentLocation();
function reverseGeocode(lat, lng) {
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
        .then(res => res.json())
        .then(data => {

            const addr = data.address || '';

            // Prioritas nama tempat
            let place =
                data.name ||
                addr.attraction ||
                addr.tourism ||
                addr.amenity ||
                addr.road ||
                addr.village ||
                addr.suburb ||
                '';

            document.getElementById('lokasi').value = place;
        });
}


</script>
@endsection