@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="custom-accordion">
                <div class="card">
                    <div class="card-header">Edit Gugatan Cerai</div>

                    <div class="card-body">
                        <!-- Formulir Edit Gugatan Cerai -->
                        <form method="POST" action="{{ route('gugatan_cerai.update', ['id' => $gugatanCerai->id]) }}">
                            @csrf
                            @method('PUT')
                            <h4>Informasi Penggugat</h4>
                            <div class="container">
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <!-- Nama Penggugat -->
                                        <div class="col-md-6 mb-3">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_penggugat">Nama Penggugat:</label>
                                                <input type="text" class="form-control" id="nama_penggugat"
                                                    name="nama_penggugat" value="{{ $gugatanCerai->nama_penggugat }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="umur_penggugat">Umur Penggugat:</label>
                                                <input type="number" class="form-control" id="umur_penggugat"
                                                    name="umur_penggugat" placeholder="Masukkan Umur"
                                                    value="{{ $gugatanCerai->umur_penggugat}}" required>
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
                                                    value="{{ $gugatanCerai->pekerjaan_penggugat}}" required>
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
                                                    Tergugat:</label>
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
                                        var otherInputId = select.id === "pendidikan_penggugat" ? "otherField" : "otherField1";
                                        var otherInput = document.getElementById(otherInputId);
                                        if (select.value.toLowerCase() === "lain-lain") {
                                            otherInput.style.display = "block";
                                            otherInput.value = ""; // clear the input field when "Lain-lain" is selected
                                        } else {
                                            otherInput.style.display = "none";
                                            otherInput.value = select.options[select.selectedIndex]
                                            .text; // set the value of the input field to the selected option's text
                                        }
                                    }
                                </script>
                                <!-- Alamat Penggugat -->
                                <div class="form-group">
                                    <label for="alamat_penggugat">Alamat Penggugat:</label>
                                    <textarea name="alamat_penggugat" id="alamat_penggugat" class="form-control"
                                        required>{{ $gugatanCerai->alamat_penggugat }}</textarea>
                                </div>
                            </div>
                            <!-- ... Add other form fields here ... -->
                            <h4>Informasi Tergugat</h4>
                            <div class="container">
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <!-- Nama Penggugat -->
                                        <div class="col-md-6 mb-3">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_tergugat">Nama Tergugat:</label>
                                                <input type="text" class="form-control" id="nama_tergugat"
                                                    name="nama_tergugat" value="{{ $gugatanCerai->nama_tergugat}}">
                                            </div>
                                        </div>
                                        <!-- Binti Penggugat -->
                                        
                                    </div>
                                </div>
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="umur_tergugat">Umur Tergugat:</label>
                                                <input type="number" class="form-control" id="umur_tergugat"
                                                    name="umur_tergugat" placeholder="Masukkan Umur"
                                                    value="{{ $gugatanCerai->umur_tergugat}}" required>
                                                @error('umur_tergugat')
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
                                                <label class="form-label" for="agama_tergugat">Agama:</label>
                                                <select name="agama_tergugat" id="agama_tergugat" class="form-control"
                                                    required>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <!-- Tambahkan opsi lain sesuai dengan kebutuhan -->
                                                </select>
                                                @error('agama_tergugat')
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
                                                <label class="form-label" for="pekerjaan_tergugat">Pekerjaan
                                                    Tergugat:</label>
                                                <input type="text" class="form-control" id="pekerjaan_tergugat"
                                                    name="pekerjaan_tergugat" placeholder="Masukkan Pekerjaan Tergugat"
                                                    value="{{ $gugatanCerai->pekerjaan_tergugat}}" required>
                                                @error('pekerjaan_tergugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Pendidikan Tergugat -->
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pendidikan_tergugat">Pendidikan
                                                    Tergugat:</label>
                                                <select name="pendidikan_tergugat" id="pendidikan_tergugat"
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
                                                <input type="text" id="otherField1" class="form-control"
                                                    name="pendidikan_tergugat" style="display: none;"
                                                    placeholder="Masukkan Pendidikan">
                                                @error('pendidikan_tergugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Alamat Tergugat -->
                                <div class="form-group">
                                    <label for="alamat_tergugat">Alamat Tergugat:</label>
                                    <textarea name="alamat_tergugat" id="alamat_tergugat" class="form-control"
                                        required>{{ $gugatanCerai->alamat_tergugat }}</textarea>
                                </div>
                            </div>

                            <!-- Informasi Lainnya -->
                            <h4>Informasi Lainnya</h4>

                            <!-- Alasan Cerai -->
                            <div class="form-group">
                                <label for="alasan_cerai">Alasan Cerai:</label>
                                <input type="text" name="alasan_cerai" id="alasan_cerai" class="form-control"
                                    value="{{ $gugatanCerai->alasan_cerai }}" required>
                            </div>

                            <!-- Tempat Menikah -->
                            <div class="form-group">
                                <label for="tempat_menikah">Tempat Menikah:</label>
                                <input type="text" name="tempat_menikah" id="tempat_menikah" class="form-control"
                                    value="{{ $gugatanCerai->tempat_menikah }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
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
