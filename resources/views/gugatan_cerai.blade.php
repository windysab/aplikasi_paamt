<!-- resources/views/gugatan_cerai.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pendaftaran Gugatan Cerai</div>

                <div class="card-body">
                    <!-- Formulir Pendaftaran Gugatan Cerai -->
                    <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
                        @csrf

                        <!-- Informasi Penggugat -->
                        <h4>Informasi Penggugat</h4>

                        <!-- Nama Penggugat -->
                        <div class="form-group">
                            <label for="nama_penggugat">Nama Penggugat:</label>
                            <input type="text" name="nama_penggugat" id="nama_penggugat" class="form-control" required>
                        </div>

                        <!-- Umur Penggugat -->
                        <div class="form-group">
                            <label for="umur_penggugat">Umur Penggugat:</label>
                            <input type="number" name="umur_penggugat" id="umur_penggugat" class="form-control"
                                required>
                        </div>


                        <!-- Agama -->
                        <div class="form-group">
                            <label for="agama_penggugat">Agama:</label>
                            <select name="agama_penggugat" id="agama_penggugat" class="form-control" required>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <!-- Tambahkan opsi lain sesuai dengan kebutuhan -->
                            </select>
                        </div>

                        <!-- Pekerjaan Penggugat -->
                        <div class="form-group">
                            <label for="pekerjaan_penggugat">Pekerjaan Penggugat:</label>
                            <input type="text" name="pekerjaan_penggugat" id="pekerjaan_penggugat" class="form-control"
                                required>
                        </div>

                        <!-- Pendidikan Penggugat -->
                        <div class="form-group">
                            <label for="pendidikan_penggugat">Pendidikan Penggugat:</label>
                            <input type="text" name="pendidikan_penggugat" id="pendidikan_penggugat"
                                class="form-control" required>
                        </div>

                        <!-- Alamat Penggugat -->
                        <div class="form-group">
                            <label for="alamat_penggugat">Alamat Penggugat:</label>
                            <textarea name="alamat_penggugat" id="alamat_penggugat" class="form-control"
                                required></textarea>
                        </div>

                        <!-- Informasi Tergugat -->
                        <h4>Informasi Tergugat</h4>

                        <!-- Nama Tergugat -->
                        <div class="form-group">
                            <label for="nama_tergugat">Nama Tergugat:</label>
                            <input type="text" name="nama_tergugat" id="nama_tergugat" class="form-control" required>
                        </div>

                        <!-- Umur Tergugat -->
                        <div class="form-group">
                            <label for="umur_tergugat">Umur Tergugat:</label>
                            <input type="number" name="umur_tergugat" id="umur_tergugat" class="form-control" required>
                        </div>
                        <!-- Agama -->
                        <div class="form-group">
                            <label for="agama_tergugat">Agama:</label>
                            <select name="agama_tergugat" id="agama_tergugat" class="form-control" required>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <!-- Tambahkan opsi lain sesuai dengan kebutuhan -->
                            </select>
                        </div>

                        <!-- Pekerjaan Tergugat -->
                        <div class="form-group">
                            <label for="pekerjaan_tergugat">Pekerjaan Tergugat:</label>
                            <input type="text" name="pekerjaan_tergugat" id="pekerjaan_tergugat" class="form-control"
                                required>
                        </div>

                        <!-- Pendidikan Tergugat -->
                        <div class="form-group">
                            <label for="pendidikan_tergugat">Pendidikan Tergugat:</label>
                            <input type="text" name="pendidikan_tergugat" id="pendidikan_tergugat" class="form-control"
                                required>
                        </div>

                        <!-- Alamat Tergugat -->
                        <div class="form-group">
                            <label for="alamat_tergugat">Alamat Tergugat:</label>
                            <textarea name="alamat_tergugat" id="alamat_tergugat" class="form-control"
                                required></textarea>
                        </div>

                        <!-- Informasi Lainnya -->
                        <h4>Informasi Lainnya</h4>

                        <!-- Alasan Cerai -->
                        <div class="form-group">
                            <label for="alasan_cerai">Alasan Cerai:</label>
                            <input type="text" name="alasan_cerai" id="alasan_cerai" class="form-control" required>
                        </div>

                        <!-- Tempat Menikah -->
                        <div class="form-group">
                            <label for="tempat_menikah">Tempat Menikah:</label>
                            <input type="text" name="tempat_menikah" id="tempat_menikah" class="form-control" required>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Kirim Gugatan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
