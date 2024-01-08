<!-- resources/views/gugatan_cerai.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="custom-accordion">
                <div class="card">
                    <div class="card-header">Formulir Pendaftaran Gugatan Cerai</div>

                    <div class="card-body">
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
                                                <input type="text" class="form-control" id="nama_penggugat"
                                                    name="nama_penggugat" placeholder="Masukkan Nama Penggugat"
                                                    value="{{ old('nama_penggugat') }}" required>
                                                @error('nama_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="binti_penggugat">Binti:</label>
                                                <input type="text" class="form-control" id="binti_penggugat"
                                                    name="binti_penggugat" placeholder="Masukkan Binti"
                                                    value="{{ old('binti_penggugat') }}" required>
                                                @error('binti_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Umur Penggugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="umur_penggugat">Umur Penggugat:</label>
                                                <input type="number" class="form-control" id="umur_penggugat"
                                                    name="umur_penggugat" placeholder="Masukkan Umur"
                                                    value="{{ old('umur_penggugat') }}" required>
                                                @error('umur_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Agama -->

                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="agama_penggugat">Agama:</label>
                                                <select name="agama_penggugat" id="agama_penggugat" class="form-control"
                                                    required>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <!-- Tambahkan opsi lain sesuai dengan kebutuhan -->
                                                </select>
                                                @error('agama_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Pekerjaan Penggugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pekerjaan_penggugat">Pekerjaan
                                                    Penggugat:</label>
                                                <input type="text" class="form-control" id="pekerjaan_penggugat"
                                                    name="pekerjaan_penggugat"
                                                    placeholder="Masukkan Pekerjaan Penggugat"
                                                    value="{{ old('pekerjaan_penggugat') }}" required>
                                                @error('pekerjaan_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <!-- Pendidikan Penggugat -->


                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pendidikan_penggugat">Pendidikan
                                                    Penggugat:</label>
                                                <select name="pendidikan_penggugat" id="pendidikan_penggugat"
                                                    class="form-control" required onchange="checkOther(this)">
                                                    <option value="tidak_tamat_sd">Tidak Tamat SD</option>
                                                    <option value="sd">SD</option>
                                                    <option value="sltp">SLTP</option>
                                                    <option value="slta">SLTA</option>
                                                    <option value="d1">D-1</option>
                                                    <option value="d2">D-2</option>
                                                    <option value="d3">D-3</option>
                                                    <option value="sarjana">Sarjana</option>
                                                    <option value="lain-lain">Lain-lain</option>
                                                </select>
                                                <br>
                                                <input type="text" id="otherField" class="form-control"
                                                    name="pendidikan_penggugat" style="display: none;"
                                                    placeholder="Masukkan Pendidikan">
                                                @error('pendidikan_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function checkOther(select) {
                                        var otherInput = document.getElementById("otherField");
                                        if (select.value.toLowerCase() === "lain-lain") {
                                            otherInput.style.display = "block";
                                            otherInput.value = ""; // clear the input field when "Lain-lain" is selected
                                        } else {
                                            otherInput.style.display = "none";
                                            otherInput.value = select.options[select.selectedIndex].text; // set the value of the input field to the selected option's text
                                        }
                                    }
                                </script>

                                <!-- Alamat Penggugat -->
                                <div class="form-group">
                                    <label for="alamat_penggugat">Alamat Penggugat:</label>
                                    <textarea name="alamat_penggugat" id="alamat_penggugat" class="form-control"
                                        required></textarea>
                                </div>

                                <!-- Informasi Tergugat -->
                                <h4>Informasi Tergugat</h4>

                                <!-- Nama Tergugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_tergugat">Nama Penggugat:</label>
                                                <input type="text" class="form-control" id="nama_tergugat"
                                                    name="nama_tergugat" placeholder="Masukkan Nama Tergugat"
                                                    value="{{ old('nama_tergugat') }}" required>
                                                @error('nama_tergugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="bin_tergugat">Bin:</label>
                                                <input type="text" class="form-control" id="bin_tergugat"
                                                    name="bin_tergugat" placeholder="Masukkan Binti"
                                                    value="{{ old('bin_tergugat') }}" required>
                                                @error('bin_tergugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Umur Tergugat -->
                                <div class="form-group">
                                    <label for="umur_tergugat">Umur Tergugat:</label>
                                    <input type="number" name="umur_tergugat" id="umur_tergugat" class="form-control"
                                        required>
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
                                    <input type="text" name="pekerjaan_tergugat" id="pekerjaan_tergugat"
                                        class="form-control" required>
                                </div>

                                <!-- Pendidikan Tergugat -->
                                <div class="form-group">
                                    <label for="pendidikan_tergugat">Pendidikan Tergugat:</label>
                                    <input type="text" name="pendidikan_tergugat" id="pendidikan_tergugat"
                                        class="form-control" required>
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
                                    <input type="text" name="alasan_cerai" id="alasan_cerai" class="form-control"
                                        required>
                                </div>

                                <!-- Tempat Menikah -->
                                <div class="form-group">
                                    <label for="tempat_menikah">Tempat Menikah:</label>
                                    <input type="text" name="tempat_menikah" id="tempat_menikah" class="form-control"
                                        required>
                                </div>

                                <!-- Tombol Submit -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Kirim Gugatan</button>
                                </div>
                                <div class="container">
                                    <h2>Button Elements</h2>
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                    <button type="button" class="btn btn-info">Button</button>
                                    <input type="button" class="btn btn-info" value="Input Button">
                                    <input type="submit" class="btn btn-info" value="Submit Button">
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection