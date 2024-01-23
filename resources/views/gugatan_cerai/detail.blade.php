<!-- resources/views/gugatan_cerai_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white"
                    style="text-align: center; font-weight: bold; font-family: Arial, sans-serif;">
                    <h5>Detail Gugatan Cerai</h5>
                </div>

                <div class="card-body">
                    <!-- Display Gugatan Cerai Details -->

                    {{-- <ul class="list-group list-group-flush">
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
                    </ul> --}}

                    <div class="card">
                        <div class="card-body">

                            <h5 class="text-title" style="text-align: center">Informasi Penggugat</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{ $gugatanCerai->nama_penggugat
                                            }}</div>
                                        <div class="col-md-6"><strong>Binti:</strong> {{ $gugatanCerai->binti_penggugat
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $gugatanCerai->umur_penggugat
                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Agama :</strong> {{ $gugatanCerai->agama_penggugat
                                            }}</div>
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
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $gugatanCerai->alamat_penggugat
                                    }}</li>
                            </ul>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Informasi Tergugat</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{ $gugatanCerai->nama_tergugat }}</div>
                                        <div class="col-md-6"><strong>Bin:</strong> {{ $gugatanCerai->bin_tergugat }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $gugatanCerai->umur_tergugat }} Tahun</div>
                                        <div class="col-md-6"><strong>Agama:</strong> {{ $gugatanCerai->agama_tergugat }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{ $gugatanCerai->pekerjaan_tergugat }}</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{ $gugatanCerai->pendidikan_tergugat }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $gugatanCerai->alamat_tergugat }}</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="text-danger mt-4">Informasi Lainnya</h4>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alasan Cerai</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>1. </strong> {{ $gugatanCerai->alasan_cerai }}
                                </li>
                                <li class="list-group-item">
                                    <strong>2. </strong> {{ $gugatanCerai->alasan_cerai2 }}
                                </li>
                                <li class="list-group-item">
                                    <strong>3. </strong> {{ $gugatanCerai->alasan_cerai3 }}
                                </li>
                                <li class="list-group-item">
                                    <strong>4. </strong> {{ $gugatanCerai->separation_details }}
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alasan Cerai</h5>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">
                                    <strong>1. </strong> {{ $gugatanCerai->alasan_cerai }}
                                </li>
                                <li class="list-group-item">
                                    <strong>2. </strong> {{ $gugatanCerai->alasan_cerai2 }}
                                </li>
                                <li class="list-group-item">
                                    <strong>3. </strong> {{ $gugatanCerai->alasan_cerai3 }}
                                </li>
                                <li class="list-group-item">
                                    <strong>4. </strong> {{ $gugatanCerai->separation_details }}
                                </li>
                            </ul>
                        </div>
                    </div>
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
