@extends('layouts.admin.main')

@section('content')
<div class="section-header">
<div class="container">
<h3>Tambah Tracking - Cargo {{ $cargo->id }}</h3>
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

    <form action="{{ route('cargo_tracking.store') }}" method="POST">
        @csrf

        <input type="hidden" name="cargo_id" value="{{ $cargo->id }}">

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ old('lokasi') }}" placeholder="Lokasi">
            @error('lokasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            
    <label>Status Cargo</label>
    <select name="status" class="form-control" required>
        <option value="">-- Pilih Status --</option>
        <option value="pending" {{ old('status', $cargo->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="proses"  {{ old('status', $cargo->status ?? '') == 'proses' ? 'selected' : '' }}>Proses</option>
        <option value="transit" {{ old('status', $cargo->status ?? '') == 'transit' ? 'selected' : '' }}>Transit</option>
        <option value="sampai"  {{ old('status', $cargo->status ?? '') == 'sampai' ? 'selected' : '' }}>Sampai</option>
    </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan') }}" placeholder="Keterangan">
            @error('keterangan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
                <div class="mb-3">
            <label for="lat" class="form-label">Latitude</label>
            <input type="text" name="lat" id="lat" class="form-control" value="{{ old('lat') }}" placeholder="Latitude">
            @error('lat') <small class="text-danger">{{ $message }}</small> @enderror

        </div>

        <div class="mb-3">
            <label for="lng" class="form-label">Longitude</label>
            <input type="text" name="lng" id="lng" class="form-control" value="{{ old('lng') }}" placeholder="Longitude">
            @error('lng') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('cargo_tracking.create', $cargo->id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
<div id="map" style="height:450px"></div>
</div>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder@2.3.0/dist/Control.Geocoder.js"></script>

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
</script>
@endsection