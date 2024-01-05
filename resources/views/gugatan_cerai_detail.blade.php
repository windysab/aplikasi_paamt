<!-- resources/views/gugatan_cerai_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Gugatan Cerai</div>

                <div class="card-body">
                    <!-- Display Gugatan Cerai Details -->
                    <h4>Informasi Penggugat</h4>
                    <p><strong>Nama Penggugat:</strong> {{ $gugatanCerai->nama_penggugat }}</p>
                    <p><strong>Umur Penggugat:</strong> {{ $gugatanCerai->umur_penggugat }}</p>
                    <p><strong>Agama Penggugat:</strong> {{ $gugatanCerai->agama_penggugat }}</p>
                    <p><strong>Pekerjaan Penggugat:</strong> {{ $gugatanCerai->pekerjaan_penggugat }}</p>
                    <p><strong>Pendidikan Penggugat:</strong> {{ $gugatanCerai->pendidikan_penggugat }}</p>
                    <p><strong>Alamat Penggugat:</strong> {{ $gugatanCerai->alamat_penggugat }}</p>

                    <!-- Add more fields as needed -->

                    <h4>Informasi Tergugat</h4>
                    <p><strong>Nama Tergugat:</strong> {{ $gugatanCerai->nama_tergugat }}</p>
                    <p><strong>Umur Tergugat:</strong> {{ $gugatanCerai->umur_tergugat }}</p>
                    <p><strong>Agama Tergugat:</strong> {{ $gugatanCerai->agama_tergugat }}</p>
                    <p><strong>Pekerjaan Tergugat:</strong> {{ $gugatanCerai->pekerjaan_tergugat }}</p>
                    <p><strong>Pendidikan Tergugat:</strong> {{ $gugatanCerai->pendidikan_tergugat }}</p>
                    <p><strong>Alamat Tergugat:</strong> {{ $gugatanCerai->alamat_tergugat }}</p>
                    
                    <!-- Add more fields as needed -->

                    <h4>Informasi Lainnya</h4>
                    <p><strong>Alasan Cerai:</strong> {{ $gugatanCerai->alasan_cerai }}</p>
                    <p><strong>Tempat Menikah:</strong> {{ $gugatanCerai->tempat_menikah }}</p>
                    <!-- Add more fields as needed -->
                </div>
                <a href="{{ route('gugatan_cerai.generate_word', ['id' => $gugatanCerai->id]) }}" class="btn btn-primary">Download Word</a>
                {{-- <a href="{{ route('gugatan_cerai') }}" class="btn btn-secondary">Kembali</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
