<!-- resources/views/gugatan_cerai_detail.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-danger text-white"
                    style="text-align: center; font-weight: bold; font-family: Arial, sans-serif;">
                    <h5>Detail Dispensasi Kawin</h5>
                </div>

                <div class="card-body">
                    <!-- Display Gugatan Cerai Details -->
                    <h5 class="text-danger mt-4">Data Pemohon</h5>

                    <div class="card">
                        <div class="card-body">

                            <h5 class="text-title" style="text-align: center">Pemohon I ( Ayah )</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{
                                            $permohonan->nama_pemohonI
                                            }}</div>
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $permohonan->umur_pemohonI
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                            $permohonan->pekerjaan_pemohonI

                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                            $permohonan->pendidikan_pemohonI
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonan->alamat_pemohonI }}
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Pemohon II ( Ibu )</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{
                                            $permohonan->nama_pemohonII
                                            }}</div>
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $permohonan->umur_pemohonII
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                            $permohonan->pekerjaan_pemohonII

                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                            $permohonan->pendidikan_pemohonII
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonan->alamat_pemohonII
                                    }}</li>
                            </ul>

                        </div>
                    </div>
                    <h5 class="text-danger mt-4">Data Calon Mempelai</h5>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Data calon Mempelai Suami/Isteri</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{
                                            $permohonan->nama_calon
                                            }}</div>
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $permohonan->umur_calon
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                            $permohonan->pekerjaan_calon

                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                            $permohonan->pendidikan_calon
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonan->alamat_calon}}
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Data calon Mempelai Suami/Isteri</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Nama :</strong> {{
                                            $permohonan->nama_calonII
                                            }}</div>
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $permohonan->umur_calonII
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                            $permohonan->pekerjaan_calonII

                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                            $permohonan->pendidikan_calonII
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonan->alamat_calonII}}
                                </li>
                            </ul>
                        </div>

                    </div>

                    <h5 class="text-danger mt-4">Data Calon Suami Isteri</h5>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Tempat menikah (ditolak)</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Kecamatan :</strong> {{
                                            $permohonan->kecamatan
                                            }}</div>
                                        <div class="col-md-6"><strong>Kabupaten :</strong> {{ $permohonan->kabupaten
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="text-title" style="text-align: center">No Surat Penolakan
                                        KUA
                                    </h5>
                                    <div class="row">

                                        <div class="col-md-6"><strong>Surat Keterangan dari </strong> {{
                                            $permohonan->surat_keterangan
                                            }}</div>
                                        <div class="col-md-6"><strong>Nomor Surat :</strong> {{
                                            $permohonan->nomor_surat
                                            }}</div>
                                        <div class="col-md-6"><strong>Tanggal Surat :</strong> {{
                                            $permohonan->tanggal_surat
                                            }}</div>
                                    </div>
                                </li>
                                <h5 class="text-title" style="text-align: center">Lama hubungan calon :
                                </h5>
                                <li class="list-group-item"><strong>Surat Keterangan dari</strong> {{
                                    $permohonan->surat_keterangan
                                    }}</li>
                                <div class="list-group-item">

                                    <div class="row">
                                        <div class="col-md-3"><strong>Tahun </strong> {{
                                            $permohonan->tahun
                                            }}</div>
                                        <div class="col-md-6"><strong>Bulan </strong>{{
                                            $permohonan->bulan
                                            }}</div>

                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="text-title" style="text-align: center">Data Calon Suami Isteri</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">

                                    <div class="row">
                                        <div class="col-md-6"><strong>Tempat menikah (ditolak):</strong> {{
                                            $permohonan->nama_calonII
                                            }}</div>
                                        <div class="col-md-6"><strong>Umur :</strong> {{ $permohonan->umur_calonII
                                            }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"><strong>Pekerjaan :</strong> {{
                                            $permohonan->pekerjaan_calonII

                                            }} Tahun</div>
                                        <div class="col-md-6"><strong>Pendidikan :</strong> {{
                                            $permohonan->pendidikan_calonII
                                            }}</div>

                                    </div>
                                </li>
                                <li class="list-group-item"><strong>Alamat :</strong> {{ $permohonan->alamat_calonII}}
                                </li>
                            </ul>
                        </div>

                    </div>

                    {{-- <div class="card">
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
                    </div> --}}
                </div>

                <div class="card-footer">

                    <a href="{{ route('permohonan_dispen.generate_word', ['id' => $permohonan->id]) }}"
                        class="btn btn-danger">Download Word</a>


                    <p>Setelah file diunduh, buka file di Microsoft Word dan pilih File > Print untuk mencetak.</p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
