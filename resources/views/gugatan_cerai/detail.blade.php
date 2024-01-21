<!-- resources/views/gugatan_cerai_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white">Detail Gugatan Cerai</div>

                <div class="card-body">
                    <!-- Display Gugatan Cerai Details -->
                    <h4 class="text-danger">Informasi Penggugat</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6"><strong>Nama :</strong> {{ $gugatanCerai->nama_penggugat
                                    }}</div>
                                <div class="col-md-6"><strong>Binti:</strong> {{
                                    $gugatanCerai->binti_penggugat }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6"><strong>Umur :</strong> {{
                                    $gugatanCerai->umur_penggugat }} Tahun</div>
                                <div class="col-md-6"><strong>Agama :</strong> {{
                                    $gugatanCerai->agama_penggugat }}</div>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="row">

                                <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                    $gugatanCerai->pekerjaan_penggugat }}</div>
                                <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                    $gugatanCerai->pendidikan_penggugat }}</div>
                            </div>

                        </li>


                        <li class="list-group-item"><strong>Alamat :</strong> {{
                            $gugatanCerai->alamat_penggugat }}
                        </li>
                        <!-- Add more fields as needed -->
                    </ul>

                    <h4 class="text-danger mt-4">Informasi Tergugat</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6"><strong>Nama :</strong> {{ $gugatanCerai->nama_tergugat
                                    }}</div>
                                <div class="col-md-6"><strong>Bin:</strong> {{
                                    $gugatanCerai->bin_tergugat }}</div>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6"><strong>Umur :</strong> {{
                                    $gugatanCerai->umur_tergugat }} Tahun</div>
                                <div class="col-md-6"><strong>Agama:</strong> {{
                                    $gugatanCerai->agama_tergugat }}</div>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                    $gugatanCerai->pekerjaan_tergugat }}</div>
                                <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                    $gugatanCerai->pendidikan_tergugat }}</div>
                            </div>

                        </li>
                        <li class="list-group-item"><strong>Alamat :</strong> {{
                            $gugatanCerai->alamat_tergugat }}
                        </li>
                        <!-- Add more fields as needed -->
                    </ul>

                    <h4 class="text-danger mt-4">Informasi Lainnya</h4>
                    {{-- <style>
                        .list-group-item {
                            padding: 10px 15px;
                            margin-bottom: 10px;
                            border: none;
                            background-color: #f8f9fa;
                            text-align: justify; /* Tambahkan ini */
                        }
                        .list-group-item label {
                            display: block;
                            margin-bottom: 5px;
                            font-weight: bold;
                        }
                        .list-group-item strong {
                            display: block;
                            margin-bottom: 5px;
                        }
                    </style> --}}
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="text-align: justify;">
                            <strong>1. {{ $gugatanCerai->alasan_cerai }}</strong>
                        </li>
                        <li class="list-group-item" style="text-align: justify;">
                            <strong>2. {{ $gugatanCerai->alasan_cerai2 }}</strong>
                        </li>
                        <li class="list-group-item" style="text-align: justify;">
                            <strong>3. {{ $gugatanCerai->alasan_cerai3 }}</strong>
                        </li>
                        <li class="list-group-item" style="text-align: justify;">
                            <strong>4. {{ $gugatanCerai->separation_details }}</strong>
                        </li>

                        <!-- Add more fields as needed -->
                    </ul>
                </div>

                <div class="card-footer">
                    <a href="{{ route('gugatan_cerai.generate_word', ['id' => $gugatanCerai->id]) }}"
                        class="btn btn-danger">Download Word</a>
                    {{-- <a href="{{ route('gugatan_cerai') }}" class="btn btn-secondary">Kembali</a> --}}
                    <a href="{{ route('gugatan_cerai.edit', ['id' => $gugatanCerai->id]) }}"
                        class="btn btn-primary">Edit</a>
                    <p>Setelah file diunduh, buka file di Microsoft Word dan pilih File > Print untuk mencetak.</p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
