@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0">Formulir Gugatan Cerai</h2>
                </div>
                <div class="card-body bg-success">
                    <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
                        @csrf
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">

                            <h4 class="mb-3" style="text-align: center;">Data Penggugat</h4>

                            <div class="form-group">
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_penggugat" style="font-weight: bold;">Nama Penggugat:</label>
                                                <input type="text" class="form-control" id="nama_penggugat" name="nama_penggugat" placeholder="Nama Lengkap Penggugat" value="{{ old('nama_penggugat') }}" required>
                                                @error('nama_penggugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <h6 class="text-white text-center mb-3" style="font-style: italic; font-size: 0.75rem;">(Diisi sesuai dengan
                                                    surat nikah)</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="binti_penggugat" style="font-weight: bold;">Binti:</label>
                                                <input type="text" class="form-control" id="binti_penggugat" name="binti_penggugat" placeholder="Nama Lengkap Binti Penggugat" value="{{ old('binti_penggugat') }}" required>
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
                                                <label class="form-label" for="umur_penggugat" style="font-weight: bold;">Umur Penggugat:</label>
                                                <input type="number" class="form-control" id="umur_penggugat" name="umur_penggugat" placeholder="Umur Penggugat" value="{{ old('umur_penggugat') }}" required>
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
                                                <label class="form-label" for="agama_penggugat" style="font-weight: bold;">Agama:</label>
                                                <select name="agama_penggugat" id="agama_penggugat" class="form-control" required>
                                                    <option value="">Pilih Agama</option>
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
                                                <label class="form-label" for="pekerjaan_penggugat" style="font-weight: bold;">Pekerjaan
                                                    Penggugat:</label>
                                                <input type="text" class="form-control" id="pekerjaan_penggugat" name="pekerjaan_penggugat" placeholder="Pekerjaan Penggugat" value="{{ old('pekerjaan_penggugat') }}" required>
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
                                                <label class="form-label" for="pendidikan_penggugat" style="font-weight: bold;">Pendidikan
                                                    Penggugat:</label>
                                                <select name="pendidikan_penggugat" id="pendidikan_penggugat" class="form-control" required onchange="checkOther(this)">
                                                    <option value="">Pilih Pendidikan</option>
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
                                                <input type="text" id="otherField" class="form-control" name="pendidikan_penggugat" style="display: none;" placeholder="Pendidikan Penggugat">
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
                                    <label for="alamat_penggugat" style="font-weight: bold;">Alamat Penggugat:</label>
                                    <textarea name="alamat_penggugat" id="alamat_penggugat" class="form-control" placeholder="Alamat lengkap Penggugat" required></textarea>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title" id="exampleModalLabel">Alamat Penggugat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-light">
                                                <div class="form-group">
                                                    <label for="jalan">Jalan</label>
                                                    <input type="text" name="jalan" id="jalan" class="form-control" required>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="no">No.</label>
                                                        <input type="text" name="no" id="no" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rt">RT.</label>
                                                        <input type="text" name="rt" id="rt" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rw">RW</label>
                                                        <input type="text" name="rw" id="rw" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="desa_kelurahan">Desa/Kelurahan</label>
                                                        <input type="text" name="desa_kelurahan" id="desa_kelurahan" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="kecamatan">Kecamatan</label>
                                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="kabupaten">Kabupaten</label>
                                                        <input type="text" name="kabupaten" id="kabupaten" class="form-control" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer btn-light">
                                                <button type="button" class="btn btn-danger" id="saveButton">Simpan</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <script>
                                    document.getElementById('alamat_penggugat').addEventListener('focus', function() {
                                        $('#exampleModal').modal('show');
                                    });
                                    document.getElementById('saveButton').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan').value;
                                        var no = document.getElementById('no').value;
                                        var rt = document.getElementById('rt').value;
                                        var rw = document.getElementById('rw').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan').value;
                                        var kecamatan = document.getElementById('kecamatan').value;
                                        var kabupaten = document.getElementById('kabupaten').value;

                                        // Check if all fields are filled
                                        if (!jalan || !no || !rt || !rw || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi alamat terlebih dahulu!", "warning");
                                            return;
                                        }

                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_penggugat').value = alamat;
                                        $('#exampleModal').modal('hide');
                                    });
                                    // Rest of your JavaScript code

                                </script>
                            </div>
                        </div>
                        <h2 class="text-black text-center mb-3">MELAWAN
                        </h2>
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">

                            <h4 class="mb-3" style="text-align: center;">Data Tergugat</h4>

                            <div class="form-group">
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="nama_tergugat" style="font-weight: bold;">Nama Tergugat :</label>
                                                <input type="text" class="form-control" id="nama_tergugat" name="nama_tergugat" placeholder="Nama Lengkap Tergugat" value="{{ old('nama_tergugat') }}" required>
                                                @error('nama_tergugat')
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Peringatan!</strong>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <h6 class="text-white text-center mb-3" style="font-style: italic; font-size: 0.75rem;">(Diisi sesuai dengan
                                                    surat nikah)</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="bin_tergugat" style="font-weight: bold;">Bin:</label>
                                                <input type="text" class="form-control" id="bin_tergugat" name="bin_tergugat" placeholder="Nama Lengkap Bin Tergugat" value="{{ old('bin_tergugat') }}" required>
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
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="umur_penggugat" style="font-weight: bold;">Umur Tergugat:</label>
                                                <input type="number" class="form-control" id="umur_tergugat" name="umur_tergugat" placeholder="Umur Tegugat" value="{{ old('umur_tergugat') }}" required>
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
                                                <label class="form-label" for="agama_tergugat" style="font-weight: bold;">Agama:</label>
                                                <select name="agama_tergugat" id="agama_tergugat" class="form-control" required>
                                                    <option value="">Pilih Agama</option>
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

                                <!-- Pekerjaan Tergugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pekerjaan_tergugat" style="font-weight: bold;">Pekerjaan
                                                    Tergugat:</label>
                                                <input type="text" class="form-control" id="pekerjaan_tergugat" name="pekerjaan_tergugat" placeholder="Pekerjaan Tergugat" value="{{ old('pekerjaan_tergugat') }}" required>
                                                @error('pekerjaan_tergugat')
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
                                                <label class="form-label" for="pendidikan_tergugat" style="font-weight: bold;">PPendidikan
                                                    Tergugat:</label>
                                                <select name="pendidikan_tergugat" id="pendidikan_tergugat" class="form-control" required onchange="checkOther(this)">
                                                    <option value="">Pilih Pendidikan</option>
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
                                                <input type="text" id="otherField1" class="form-control" name="pendidikan_tergugat" style="display: none;" placeholder="Masukkan Pendidikan">
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
                                    <label for="alamat_tergugat" style="font-weight: bold;">Alamat Tergugat:</label>
                                    <textarea name="alamat_tergugat" id="alamat_tergugat" class="form-control" placeholder="Alamat lengkap Tergugat" required></textarea>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_tergugat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_tergugat" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title" id="exampleModalLabel_tergugat">Alamat Tegugat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-light">
                                                <div class="form-group">
                                                    <label for="jalan_tergugat">Jalan</label>
                                                    <input type="text" name="jalan_tergugat" id="jalan_tergugat" class="form-control" required>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="no_tergugat">No.</label>
                                                        <input type="text" name="no_tergugat" id="no_tergugat" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rt_tergugat">RT.</label>
                                                        <input type="text" name="rt_tergugat" id="rt_tergugat" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rw_tergugat">RW</label>
                                                        <input type="text" name="rw_tergugat" id="rw_tergugat" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="desa_kelurahan_tergugat">Desa/Kelurahan</label>
                                                        <input type="text" name="desa_kelurahan_tergugat" id="desa_kelurahan_tergugat" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="kecamatan_tergugat">Kecamatan</label>
                                                        <input type="text" name="kecamatan_tergugat" id="kecamatan_tergugat" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="kabupaten_tergugat">Kabupaten</label>
                                                        <input type="text" name="kabupaten_tergugat" id="kabupaten_tergugat" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer btn-light">
                                                <button type="button" class="btn btn-danger" id="saveButton_tergugat">Simpan</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('alamat_tergugat').addEventListener('focus', function() {
                                        $('#exampleModal_tergugat').modal('show');
                                    });
                                    document.getElementById('saveButton_tergugat').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan_tergugat').value;
                                        var no = document.getElementById('no_tergugat').value;
                                        var rt = document.getElementById('rt_tergugat').value;
                                        var rw = document.getElementById('rw_tergugat').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan_tergugat').value;
                                        var kecamatan = document.getElementById('kecamatan_tergugat').value;
                                        var kabupaten = document.getElementById('kabupaten_tergugat').value;

                                        if (!jalan || !no || !rt || !rw || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi alamat terlebih dahulu!", "warning");
                                            return;
                                        }

                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_tergugat').value = alamat;
                                        $('#exampleModal_tergugat').modal('hide');
                                    });
                                    // Rest of your JavaScript code

                                </script>
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" id="submitButton">Kirim
                                Formulir
                                Permohonan Gugatan</button>
                        </div>

                        <script>
                            document.getElementById('submitButton').addEventListener('click', function(event) {
                                var inputs = document.getElementsByTagName('input');
                                var emptyInputs = []; // Array to store the ids of empty inputs

                                var exemptedInputs = ['rw', 'rw_tergugat', 'rw_calon', 'rw_calonII', 'rw_calonML', 'rw_calonMP'];

                                for (var i = 0; i < inputs.length; i++) {
                                    var inputName = inputs[i].getAttribute('id');
                                    if (inputs[i].value.trim() === '' && !exemptedInputs.includes(inputName)) {
                                        emptyInputs.push(inputName);
                                    }
                                }

                                if (emptyInputs.length > 0) {
                                    event.preventDefault(); // Prevent the default form submission
                                    swal("Peringatan!", "Mohon lengkapi kolom " + emptyInputs.join(', ') + " terlebih dahulu!", "warning");
                                }
                            });

                        </script>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
