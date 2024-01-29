<!-- resources/views/permohonan_dispen_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white"
                    style="text-align: center; font-weight: bold; font-family: Arial, sans-serif;">
                    <h5>Detail Permohonan Dispensasi Kawin</h5>
                </div>

                <div class="card-body">
                    <!-- Display Permohonan Dispensasi Kawin Details -->\
                    @foreach ($gugatanCerai as $gugatan)

                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Informasi Pemohon I</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nama :</strong> {{ $permohonanDispen->nama_pemohonI }}</li>
                                <li class="list-group-item"><strong>Umur :</strong> {{ $permohonanDispen->umur_pemohonI }}</li>
                                <li class="list-group-item"><strong>Pekerjaan :</strong> {{ $permohonanDispen->pekerjaan_pemohonI }}</li>
                                <li class="list-group-item"><strong>Pendidikan :</strong> {{ $permohonanDispen->pendidikan_pemohonI }}</li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonanDispen->alamat_pemohonI }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Repeat the above card for each category of information -->

                </div>

                <div class="card-footer">
                    <a href="{{ route('permohonan_dispen.generate_word', ['id' => $permohonanDispen->id]) }}"
                        class="btn btn-danger">Download Word</a>
                    <a href="{{ route('permohonan_dispen.edit', ['id' => $permohonanDispen->id]) }}"
                        class="btn btn-primary">Edit</a>
                    <p>Setelah file diunduh, buka file di Microsoft Word dan pilih File > Print untuk mencetak.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
