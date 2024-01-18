<!-- resources/views/gugatan_cerai.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="custom-accordion">
                <div class="card">
                    <div class="card-header bg-danger font-weight-bold text-center">
                        <h4>Formulir Gugatan Cerai</h4> <!-- Ubah teks ini -->
                    </div>

                    <div class="card-body bg-info"> <!-- Ubah warna latar belakang ini -->
                        <!-- Formulir Pendaftaran Gugatan Cerai -->
                        <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
                            @csrf

                            <!-- Informasi Penggugat -->
                            <h4>Informasi Penggugat</h4>
                            <div class="container">

                                <!-- Nama Penggugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_penggugat">Nama Penggugat:</label>
                                                <input type="text" class="form-control" id="nama_penggugat" name="nama_penggugat" placeholder="Masukkan Nama Penggugat" value="{{ old('nama_penggugat') }}" required>
