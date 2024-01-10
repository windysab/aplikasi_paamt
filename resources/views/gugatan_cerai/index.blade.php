<!-- resources/views/gugatan_cerai_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white">Detail Gugatan Cerai</div>

                <div class="card-body">
                    @foreach ($gugatanCerai as $gugatan)
                        <!-- Display Gugatan Cerai Details -->
                        <h4 class="text-danger">Informasi Penggugat</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><strong>Nama :</strong> {{ $gugatan->nama_penggugat }}</div>
                                    <div class="col-md-6"><strong>Binti:</strong> {{ $gugatan->binti_penggugat }}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><strong>Umur :</strong> {{ $gugatan->umur_penggugat }} Tahun</div>
                                    <div class="col-md-6"><strong>Pekerjaan :</strong> {{ $gugatan->pekerjaan_penggugat }}</div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>Alamat :</strong> {{ $gugatan->alamat_penggugat }}</li>
                            <!-- Add more fields as needed -->
                        </ul>

                        <h4 class="text-danger mt-4">Informasi Tergugat</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><strong>Nama :</strong> {{ $gugatan->nama_tergugat }}</div>
                                    <div class="col-md-6"><strong>Bin:</strong> {{ $gugatan->bin_tergugat }}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6"><strong>Umur :</strong> {{ $gugatan->umur_tergugat }} Tahun</div>
                                    <div class="col-md-6"><strong>Pekerjaan :</strong> {{ $gugatan->pekerjaan_tergugat }}</div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>Alamat :</strong> {{ $gugatan->alamat_tergugat }}</li>
                            <!-- Add more fields as needed -->
                        </ul>

                        <h4 class="text-danger mt-4">Informasi Lainnya</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Alasan Cerai:</strong> {{ $gugatan->alasan_cerai }}</li>
                            <li class="list-group-item"><strong>Tempat Menikah:</strong> {{ $gugatan->tempat_menikah }}</li>
                            <!-- Add more fields as needed -->
                        </ul>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


