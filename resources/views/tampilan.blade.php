@extends('layouts.app1')

@section('title', 'General Dashboard')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>

        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-3">Laporan Bulanan Perkara</h1>
            <h1 class="text-center mt-3">Pengadilan Agama Tanjung</h1>
            <h1 class="text-center mt-3">Kabupaten Tabalong</h1>
            <h1 class="text-center mt-3">Tahun 2021</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Jumlah Perkara</th>
                        <th scope="col">Jumlah Perkara Yang Selesai</th>
                        <th scope="col">Jumlah Perkara Yang Belum Selesai</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
                        <th scope="col">Jumlah Perkara Yang Di Tolak</th>
                        <th scope="col">Jumlah Perkara Yang Di Setujui</th>
</div>
@endsection

@push('scripts')
<!-- JS Libraries -->
<script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
