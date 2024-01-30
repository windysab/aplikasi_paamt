@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Permohonan</h1>

    <p><strong>Nama Pemohon:</strong> {{ $permohonan->nama_pemohonI }}</p>
    <p><strong>Umur Pemohon:</strong> {{ $permohonan->umur_pemohonI }}</p>
    <p><strong>Pekerjaan Pemohon:</strong> {{ $permohonan->pekerjaan_pemohonI }}</p>
    <p><strong>Pendidikan Pemohon:</strong> {{ $permohonan->pendidikan_pemohonI }}</p>
    <p><strong>Alamat Pemohon:</strong> {{ $permohonan->alamat_pemohonI }}</p>

    <!-- Tampilkan detail lainnya sesuai kebutuhan -->
</div>
@endsection
