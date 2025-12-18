@extends('layouts.admin.main')
@section('title', 'Dashboard')

@section('content')
<div class="section-header">
<div class="container">
    <h3 class="mb-4 text-center">📊 Grafik Dinas Kesehatan </h3>

    {{-- ============ GRAFIK 1: BIDANG KESEHATAN MASYARAKAT ============ --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            <h5>👥 Bidang Kesehatan Masyarakat</h5>
        </div>
        <div class="card-body">
            <canvas id="grafikKesehatan"></canvas>
        </div>
    </div>

    {{-- ============ GRAFIK 2: BIDANG PELAYANAN KESEHATAN ============ --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5>🏥 Bidang Pelayanan Kesehatan</h5>
        </div>
        <div class="card-body">
            <canvas id="grafikPelayanan"></canvas>
        </div>
    </div>

    {{-- ============ GRAFIK 3: BIDANG PENCEGAHAN PENYAKIT MENULAR ============ --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-danger text-white">
            <h5>🦠 Bidang Pencegahan Penyakit Menular</h5>
        </div>
        <div class="card-body">
            <canvas id="grafikPencegahan"></canvas>
        </div>
    </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            <h5>👥 Bidang Sumber Daya Kesehatan </h5>
        </div>
        <div class="card-body">
            <canvas id="grafikSdm"></canvas>
        </div>
    </div>
        <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            <h5>👥 Bidang Sekretariat</h5>
        </div>
        <div class="card-body">
            <canvas id="grafikSekret"></canvas>
        </div>
    </div>
</div>

{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script src="{{ asset("assets/dashboard/package/dist/chart.umd.min.js") }}"></script>
<script>
// === 1. Grafik Kesehatan Masyarakat ===
new Chart(document.getElementById('grafikKesehatan'), {
    type: 'line',
    data: {
        labels: @json($kesehatan_labels),
        datasets: [
            { label: 'Angka Kematian Ibu', data: @json($kematian_ibu), borderColor: 'red', fill: false },
            { label: 'Angka Kematian Bayi', data: @json($kematian_bayi), borderColor: 'orange', fill: false },
            { label: 'Prevalensi Stunting (%)', data: @json($stunting), borderColor: 'green', fill: false },
            { label: 'Cakupan ASI Eksklusif (%)', data: @json($asi), borderColor: 'blue', fill: false }
        ]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});

// === 2. Grafik Pelayanan Kesehatan ===
new Chart(document.getElementById('grafikPelayanan'), {
    type: 'bar',
    data: {
        labels: @json($pelayanan_labels),
        datasets: [
            { label: 'Fasilitas Terakreditasi (%)', data: @json($faskes), backgroundColor: 'rgba(54, 162, 235, 0.6)' },
            { label: 'RS Terakreditasi', data: @json($rs), backgroundColor: 'rgba(255, 206, 86, 0.6)' },
            { label: 'Puskesmas Madya', data: @json($puskesmas), backgroundColor: 'rgba(75, 192, 192, 0.6)' }
        ]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});

// === 3. Grafik Pencegahan Penyakit Menular ===
new Chart(document.getElementById('grafikPencegahan'), {
    type: 'line',
    data: {
        labels: @json($pencegahan_labels),
        datasets: [
            { label: 'Pelayanan KLB (%)', data: @json($klb), borderColor: 'red', fill: false },
            { label: 'Kasus TB', data: @json($tb), borderColor: 'orange', fill: false },
            { label: 'Imunisasi Dasar (%)', data: @json($imunisasi), borderColor: 'green', fill: false },
            { label: 'Konsumsi Rokok (10–18 th) (%)', data: @json($rokok), borderColor: 'purple', fill: false },
            { label: 'Penanganan Krisis Kesehatan (%)', data: @json($krisis), borderColor: 'blue', fill: false }
        ]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});
new Chart(document.getElementById('grafikSdm'), {
    type: 'bar',
    data: {
        labels: @json($sumberdaya_labels),
        datasets: [
            { label: 'Rasio Dokter', data: @json($rdp), backgroundColor: 'rgba(255, 206, 86, 0.6)'},
            { label: 'Rasio Spesialis', data: @json($rnp), backgroundColor: 'rgba(86, 108, 255, 0.6)' },

        ]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});
</script>
<script>
// === 1. Grafik Kesehatan Masyarakat ===
new Chart(document.getElementById('grafikSekret'), {
    type: 'line',
    data: {
        labels: @json($sekret_labels),
        datasets: [
            { label: 'Nilai Sakip', data: @json($skr), borderColor: 'red', fill: false },
                   ]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});
</script>
@endsection


@section('header')