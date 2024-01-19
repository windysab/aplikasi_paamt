@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="custom-accordion">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-header bg-danger font-weight-bold text-center">
                            <h4>Pendaftaran Gugatan Cerai</h4>
                        </div>
                    </div>

                    <div class="card-body bg-success">
                        <!-- card-body content -->
                        <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
                            @csrf
                            <div class="row">
                                <!-- Penggugat -->
                                <div class="col">
                                    <div class="form-group">
                                        <!-- Nama Penggugat -->
                                        <div id="personal-data" class="collapse show">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3 mb-4">
                                                        <label class="form-label" for="nama_penggugat">Nama
                                                            Penggugat:</label>
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
                                                        <label class="form-label" for="umur_penggugat">Umur
                                                            Penggugat:</label>
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
                                                        <select name="agama_penggugat" id="agama_penggugat"
                                                            class="form-control" required>
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

                                        <label for="alamat_penggugat">Alamat Penggugat:</label>
                                        <textarea name="alamat_penggugat" id="alamat_penggugat" class="form-control"
                                            placeholder="isi Alamat lengkap" required></textarea>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Alamat</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Jalan <input type="text" name="jalan" id="jalan"
                                                                class="form-control" required>
                                                            <div
                                                                style="display: flex; justify-content: space-between; margin-top: 10px;">
                                                                No. <input type="text" name="no" id="no"
                                                                    class="form-control" required style="width: 30%;">
                                                                RT. <input type="text" name="rt" id="rt"
                                                                    class="form-control" required style="width: 30%;">
                                                                RW <input type="text" name="rw" id="rw"
                                                                    class="form-control" required style="width: 30%;">
                                                            </div>
                                                            Desa/Kelurahan <input type="text" name="desa_kelurahan"
                                                                id="desa_kelurahan" class="form-control" required>
                                                            Kecamatan <input type="text" name="kecamatan" id="kecamatan"
                                                                class="form-control" required>
                                                            Kabupaten <input type="text" name="kabupaten" id="kabupaten"
                                                                class="form-control" required>
                                                        </div>
                                                        <form id="myForm">
                                                            <!-- Your inputs here -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary"
                                                                    id="saveButton" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
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

                                                var alamat =
                                                    `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                                document.getElementById('alamat_penggugat').value = alamat;
                                                $('#exampleModal').modal('hide');
                                            });
                                            // Rest of your JavaScript code

                                        </script>

                                    </div>
                                </div>


                                <!-- Tergugat -->
                                <div class="col">
                                    <div class="form-group">
                                        <!-- Nama Tergugat -->
                                        <div id="personal-data" class="collapse show">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3 mb-4">
                                                        <label class="form-label" for="nama_tergugat">Nama
                                                            Penggugat:</label>
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
                                        <div id="personal-data" class="collapse show">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3 mb-4">
                                                        <label class="form-label" for="umur_penggugat">Umur
                                                            Tergugat:</label>
                                                        <input type="number" class="form-control" id="umur_tergugat"
                                                            name="umur_tergugat" placeholder="Masukkan Umur"
                                                            value="{{ old('umur_tergugat') }}" required>
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
                                                        <select name="agama_tergugat" id="agama_tergugat"
                                                            class="form-control" required>
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
                                                        <label class="form-label" for="pekerjaan_tergugat">Pekerjaan
                                                            Tergugat:</label>
                                                        <input type="text" class="form-control" id="pekerjaan_tergugat"
                                                            name="pekerjaan_tergugat"
                                                            placeholder="Masukkan Pekerjaan Tergugat"
                                                            value="{{ old('pekerjaan_tergugat') }}" required>
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
                                                        <label class="form-label" for="pendidikan_tergugat">PPendidikan
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

                                        <label for="alamat_tergugat">Alamat Tergugat:</label>
                                        <textarea name="alamat_tergugat" id="alamat_tergugat" class="form-control"
                                            placeholder="isi Alamat lengkap" required></textarea>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal_tergugat" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel_tergugat" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel_tergugat">Alamat
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Jalan <input type="text" name="jalan_tergugat"
                                                            id="jalan_tergugat" class="form-control" required>
                                                        <div
                                                            style="display: flex; justify-content: space-between; margin-top: 10px;">
                                                            No. <input type="text" name="no_tergugat" id="no_tergugat"
                                                                class="form-control" required style="width: 30%;">
                                                            RT. <input type="text" name="rt_tergugat" id="rt_tergugat"
                                                                class="form-control" required style="width: 30%;">
                                                            RW <input type="text" name="rw_tergugat" id="rw_tergugat"
                                                                class="form-control" required style="width: 30%;">
                                                        </div>
                                                        Desa/Kelurahan <input type="text" name="desa_kelurahan_tergugat"
                                                            id="desa_kelurahan_tergugat" class="form-control" required>
                                                        Kecamatan <input type="text" name="kecamatan_tergugat"
                                                            id="kecamatan_tergugat" class="form-control" required>
                                                        Kabupaten <input type="text" name="kabupaten_tergugat"
                                                            id="kabupaten_tergugat" class="form-control" required>
                                                    </div>
                                                    <form id="myForm_tergugat">
                                                        <!-- Your inputs here -->
                                                        <div class="modal-footer">

                                                            <button type="button" class="btn btn-primary"
                                                                id="saveButton_tergugat"
                                                                data-dismiss="modal">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>

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

                                                var alamat =
                                                    `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                                document.getElementById('alamat_tergugat').value = alamat;
                                                $('#exampleModal_tergugat').modal('hide');
                                            });


                                            // Rest of your JavaScript code

                                        </script>

                                </div>
                            </div>
                    </div>

                    <h4>Informasi Lainnya</h4>
                    <h6>Dengan hormat, Penggugat mengajukan cerai gugat dengan alasan-alasan/dalil-dalil
                        sebagai berikut :
                    </h6>
                    <!-- Alasan Cerai -->
                    <div class="form-group">
                        <textarea name="alasan_cerai" id="alasan_cerai" class="form-control" placeholder="s" required rows="3" style="text-align: justify;"></textarea>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_alasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_alasan" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal_alasan">1. Bahwa Penggugat
                                        dengan Tergugat telah melangsungkan pernikahan pada</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="myForm_tergugat">
                                    <div class="modal-body">
                                        Hari <input type="text" name="hari" id="hari" class="form-control" required readonly>
                                        Tanggal <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                                        Desa/Kelurahan <input type="text" name="desa_kelurahan_alasan" id="desa_kelurahan_alasan" class="form-control" required>
                                        Kecamatan <input type="text" name="kecamatan_alasan" id="kecamatan_alasan" class="form-control" required>
                                        Kabupaten <input type="text" name="kabupaten_alasan" id="kabupaten_alasan" class="form-control" required>
                                        <h6 class="modal-title" id="exampleModal_alasan">kemudian Tergugat
                                            mengucapkan shigat taklik talak terhadap Penggugat sesuai dengan
                                            Kutipan/Duplikat Kutipan Akta Nikah</h6>
                                        Nomor Akta Nikah <input type="text" name="no_akta_nikah" id="no_akta_nikah" class="form-control" required>
                                        Tanggal Akta Nikah <input type="date" name="tanggal_akta_nikah" id="tanggal_akta_nikah" class="form-control" required>
                                        KUA Kecamatan <input type="text" name="kua_kecamatan" id="kua_kecamatan" class="form-control" required>
                                        Kabupaten <input type="text" name="kua_kabupaten" id="kua_kabupaten" class="form-control" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" id="saveButton_alasan" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('alasan_cerai').addEventListener('focus', function() {
                            $('#exampleModal_alasan').modal('show');
                        });

                        document.getElementById('tanggal').addEventListener('change', function() {
                            var tanggal = new Date(this.value);
                            var hari = tanggal.toLocaleString('id-ID', {
                                weekday: 'long'
                            });
                            document.getElementById('hari').value = hari;
                        });
                        document.getElementById('saveButton_alasan').addEventListener('click', function() {
                            var hari = document.getElementById('hari').value;
                            var tanggal = document.getElementById('tanggal').value;
                            var desa_kelurahan = document.getElementById('desa_kelurahan_alasan').value;
                            var kecamatan = document.getElementById('kecamatan_alasan').value;
                            var kabupaten = document.getElementById('kabupaten_alasan').value;
                            var no_akta_nikah = document.getElementById('no_akta_nikah').value;
                            var tanggal_akta_nikah = document.getElementById('tanggal_akta_nikah').value;
                            var kua_kecamatan = document.getElementById('kua_kecamatan').value;
                            var kua_kabupaten = document.getElementById('kua_kabupaten').value;

                            var alasan =
                                `1.	Bahwa Penggugat dengan Tergugat telah melangsungkan pernikahan pada hari ${hari}, tanggal ${tanggal} di Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}, kemudian Tergugat mengucapkan shigat taklik talak terhadap Penggugat sesuai dengan Kutipan/Duplikat Kutipan Akta Nikah Nomor ${no_akta_nikah}, tanggal ${tanggal_akta_nikah} dari Kantor Urusan Agama Kecamatan ${kua_kecamatan}, Kabupaten ${kua_kabupaten}`;

                            document.getElementById('alasan_cerai').value = alasan;
                            $('#exampleModal_alasan').modal('hide');
                        });
                        // Rest of your JavaScript code

                    </script>

                    <div class="form-group">
                        <textarea name="alasan_cerai2" id="alasan_cerai2" class="form-control" placeholder="saasd" required readonly rows="3" style="text-align: justify;"></textarea>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_alasan2" tabindex="-1" role="dialog" aria-labelledby="exampleModal_alasan2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal_alasan2">Bahwa setelah
                                        pernikahan tersebut Penggugat dan Tergugat bertempat tinggal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="form" class="p-3">
                                    <div class="form-group">
                                        <label>Silahkan Pilih :</label>
                                        <select id="tempat_tinggal" name="tempat_tinggal" class="form-control">
                                            <option value="">Pilih tempat tinggal</option>
                                            <option value="rumah_sendiri">Di rumah sendiri, di desa
                                            </option>
                                            <option value="rumah_orangtua_penggugat">Di rumah orangtua
                                                Penggugat, di desa</option>
                                            <option value="rumah_orangtua_tergugat">Di rumah orangtua
                                                Tergugat, di desa</option>
                                            <option value="rumah_kontrakan">Di rumah kontrakan / kos, di
                                                desa</option>
                                        </select>
                                    </div>
                                    <div id="detail_container">
                                        <!-- Detail input will be added here -->
                                    </div>
                                    <div class="form-group">
                                        <label>Kumpul baik selama</label>
                                        <div class="d-flex">
                                            <input type="number" id="tahun" name="tahun" placeholder="tahun" class="form-control mr-2">
                                            <input type="number" id="bulan" name="bulan" placeholder="bulan" class="form-control">
                                        </div>
                                    </div>
                                    <div id="detail_container">
                                        <!-- Detail input will be added here -->
                                    </div>
                                    <div class="form-group">
                                        <label>dan telah dikaruniai</label>
                                        <input type="number" id="jumlah_anak" name="jumlah_anak" placeholder="jumlah anak" class="form-control">
                                    </div>
                                    <p>orang anak, yaitu:</p>
                                    <div id="anak_container">
                                        <!-- Anak-anak akan ditambahkan di sini -->
                                    </div>

                                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById('alasan_cerai2').addEventListener('focus', function() {
                            $('#exampleModal_alasan2').modal('show');
                        });
                        document.getElementById('tempat_tinggal').addEventListener('change', function() {
                            var tempatTinggal = this.value;
                            var detailContainer = document.getElementById('detail_container');

                            // Clear the container first
                            detailContainer.innerHTML = '';

                            if (tempatTinggal) {
                                var detailDiv = document.createElement('div');
                                detailDiv.className = 'form-group';
                                detailDiv.innerHTML = `
                                    <label for="detail_${tempatTinggal}">Silakan Isi ${tempatTinggal} di desa:</label>
                                    <input type="text" id="detail_${tempatTinggal}" name="detail_${tempatTinggal}" placeholder="Desa" class="form-control" required>
                                `;

                                detailContainer.appendChild(detailDiv);
                            }
                        });

                        document.getElementById('jumlah_anak').addEventListener('input', function() {
                            var jumlahAnak = this.value;
                            var anakContainer = document.getElementById('anak_container');

                            // Clear the container first
                            anakContainer.innerHTML = '';

                            for (var i = 0; i < jumlahAnak; i++) {
                                var anakDiv = document.createElement('div');
                                anakDiv.className = 'form-group row'; // add row class here

                                anakDiv.innerHTML = `
                                <div class="col-md-6"> <!-- wrap each label-input pair in a col div -->
<label for="anak_${i+1}">Anak ke-${i+1}:</label>
<input type="text" name="anak_${i+1}" id="anak_${i+1}" placeholder="isi nama anak dan bin/binti" class="form-control" required>
</div>
<div class="col-md-6"> <!-- wrap each label-input pair in a col div -->
<label for="tanggal_lahir_anak_${i+1}">Tanggal lahir:</label>
<input type="date" class="form-control" id="tanggal_lahir_anak_${i+1}" name="tanggal_lahir_anak_${i+1}">
</div>
`;


                                anakContainer.appendChild(anakDiv);
                            }
                        });

                        // document.getElementById('form').addEventListener('submit', function(event) {
                        //     event.preventDefault(); // Prevent the default form submission

                        //     var tempatTinggal = document.getElementById('tempat_tinggal').value;
                        //     var detailTempatTinggal = document.getElementById('detail_' + tempatTinggal).value;
                        //     var tahun = document.getElementById('tahun').value;
                        //     var bulan = document.getElementById('bulan').value;
                        //     var jumlahAnak = document.getElementById('jumlah_anak').value;

                        //     var anakContainer = document.getElementById('anak_container');
                        //     var anakInputs = anakContainer.getElementsByTagName('input');
                        //     var anak = [];
                        //     for (var i = 0; i < anakInputs.length; i += 2) {
                        //         var namaAnak = anakInputs[i].value;
                        //         var tanggalLahir = new Date(anakInputs[i + 1].value);
                        //         var opsi = {
                        //             year: 'numeric'
                        //             , month: 'long'
                        //             , day: 'numeric'
                        //         };
                        //         var tanggalLahirIndonesia = tanggalLahir.toLocaleDateString('id-ID', opsi);
                        //         anak.push(namaAnak + ', tanggal lahir ' + tanggalLahirIndonesia);
                        //     }

                        //     var alasan =
                        //         `2.	Bahwa setelah pernikahan tersebut Penggugat dan Tergugat bertempat tinggal di
                        //         ${detailTempatTinggal}
                        //         kumpul baik selama ${tahun} tahun ${bulan} bulan dan telah dikaruniai ${jumlahAnak} orang anak, yaitu: Nama ${anak.join(', tanggal lahir  ')}`;

                        //     document.getElementById('alasan_cerai2').value = alasan;
                        //     $('#exampleModal_alasan2').modal('hide');
                        // });
                        document.getElementById('form').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevent the default form submission

                            var tempatTinggal = document.getElementById('tempat_tinggal').value;
                            var detailTempatTinggal = document.getElementById('detail_' + tempatTinggal).value;
                            var tahun = document.getElementById('tahun').value;
                            var bulan = document.getElementById('bulan').value;
                            var jumlahAnak = document.getElementById('jumlah_anak').value;

                            var anakContainer = document.getElementById('anak_container');
                            var anakInputs = anakContainer.getElementsByTagName('input');
                            var anak = [];
                            for (var i = 0; i < anakInputs.length; i += 2) {
                                var namaAnak = anakInputs[i].value;
                                var tanggalLahir = new Date(anakInputs[i + 1].value);
                                var opsi = {
                                    year: 'numeric'
                                    , month: 'long'
                                    , day: 'numeric'
                                };
                                var tanggalLahirIndonesia = tanggalLahir.toLocaleDateString('id-ID', opsi);
                                anak.push({
                                    nama: namaAnak
                                    , tanggalLahir: tanggalLahirIndonesia
                                });
                            }

                            var alasan = `2. Bahwa setelah pernikahan tersebut Penggugat dan Tergugat bertempat tinggal di
${detailTempatTinggal}
Kumpul baik selama ${tahun} tahun ${bulan} bulan, dan telah dikaruniai ${jumlahAnak} orang anak, yaitu:
${anak.map((anak, index) => `${index + 1}. Nama ${anak.nama}, tanggal lahir ${anak.tanggalLahir}`).join("\n")}`;

                            document.getElementById('alasan_cerai2').value = alasan;
                            $('#exampleModal_alasan2').modal('hide');
                        });
                        //                                     var detailTempatTinggal = [
                        //     "Di rumah sendiri, di desa ...",
                        //     "Di rumah orangtua Penggugat, di desa ...",
                        //     "Di rumah orangtua Tergugat, di desa ...",
                        //     "Di rumah kontrakan / kos, di desa ..."
                        // ];

                        // var anak = [
                        //     { nama: "Nama 1", tanggalLahir: "Tanggal 1" },
                        //     { nama: "Nama 2", tanggalLahir: "Tanggal 2" },
                        //     { nama: "Nama 3", tanggalLahir: "Tanggal 3" },
                        //     { nama: "Nama 4", tanggalLahir: "Tanggal 4" }
                        // ];

                        // var alasan = `2. Bahwa setelah pernikahan tersebut Penggugat dan Tergugat bertempat tinggal di
                        // ${detailTempatTinggal.map((tempat, index) => `(${String.fromCharCode(97 + index)}) ${tempat}`).join("\n")}
                        // Kumpul baik selama ${tahun} tahun ${bulan} bulan, dan telah dikaruniai ${jumlahAnak} orang anak, yaitu:
                        // ${anak.map((anak, index) => `${index + 1}. Nama ${anak.nama}, tanggal lahir ${anak.tanggalLahir}`).join("\n")}`;

                        // console.log(alasan);

                    </script>
                    <!-- Alasan Cerai3 -->
                    <div class="form-group">
                        <textarea name="alasan_cerai3" id="alasan_cerai3" class="form-control" placeholder="alasan_cerai3" required readonly rows="3" style="text-align: justify;"></textarea>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h4 class="modal-title" id="myModalLabel">Alasan lainnya / Penjelasan
                                        kejadian</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="date">Tanggal:</label>
                                        <input type="date" id="date" name="date" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="reason">Alasan:</label>
                                        <select id="reason" name="reason" class="form-control" onchange="showTextarea(this)">
                                            <option value="">Pilih Alasan</option>
                                            <option value="(a) Mengkonsumsi minum-minuman keras. ">
                                                Mengkonsumsi minum-minuman keras. (jelaskan
                                                kejadiannya di
                                                tempat yang sudah disediakan di bawah)</option>
                                            <option value="(b) Bermain judi">Bermain judi. (jelaskan
                                                kejadiannya di tempat
                                                yang
                                                sudah
                                                disediakan di bawah)</option>
                                            <option value="(c) Memukul Penggugat">Memukul Penggugat.
                                                (jelaskan kejadiannya di
                                                tempat
                                                yang sudah
                                                disediakan di bawah)</option>
                                            <option value="(d) Telah menjalin hubungan asmara dengan perempuan lain">
                                                Telah menjalin hubungan asmara dengan
                                                perempuan
                                                lain.
                                                (jelaskan kejadiannya di tempat yang sudah disediakan di
                                                bawah)
                                            </option>
                                            <option value="(e) Sering keluar pada malam hari / pulang pada waktu dini hari / tidak pulang berhari – hari">
                                                Sering keluar pada malam hari / pulang pada
                                                waktu
                                                dini hari /
                                                tidak pulang berhari – hari. (jelaskan kejadiannya di tempat
                                                yang sudah
                                                disediakan di bawah)</option>
                                            <option value="(f) Malas berkerja">Malas berkerja. (jelaskan
                                                kejadiannya di
                                                tempat
                                                yang sudah
                                                disediakan di bawah)</option>
                                            <option value="(g) Tidak memberi biaya untuk keperluan rumah tangga sehingga tidak mencukupi">
                                                Tidak memberi biaya untuk keperluan rumah
                                                tangga
                                                sehingga
                                                tidak mencukupi. (jelaskan kejadiannya di tempat yang sudah
                                                disediakan di
                                                bawah)</option>
                                            <option value="(h) Perkawinan Penggugat dan Tergugat dijodohkan oleh orang tua masing-masing">
                                                Perkawinan Penggugat dan Tergugat dijodohkan
                                                oleh
                                                orang tua
                                                masing-masing. (jelaskan kejadiannya di tempat yang sudah
                                                disediakan di
                                                bawah)</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="reason_i_modal">Penjelasan:</label>
                                        <textarea class="form-control" id="reason_i_modal" name="reason_i_modal" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="saveChanges">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById('alasan_cerai3').addEventListener('focus', function() {
                            $('#myModal').modal('show');
                        });

                        document.getElementById('saveChanges').addEventListener('click', function() {

                            var date = new Date(document.getElementById('date').value);
                            var day = date.getDate();
                            var month = date.getMonth() + 1; // Months are zero based
                            var year = date.getFullYear();
                            var reason = document.getElementById('reason').value;
                            var reason_i_modal = document.getElementById('reason_i_modal').value;

                            var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                            var monthName = monthNames[month - 1];

                            var alasan = `3. Bahwa sejak tanggal ${day} bulan ${monthName} tahun ${year}, antara Penggugat dan Tergugat sering terjadi perselisihan dan pertengkaran dikarenakan ${reason} Alasan lainnya / Penjelasan kejadian ${reason_i_modal}`;

                            document.getElementById('alasan_cerai3').value = alasan;
                            $('#myModal').modal('hide');
                        });

                    </script>

                    <div class="form-group">
                        <textarea name="separation_details" id="separation_details" class="form-control" placeholder="Klik untuk mengisi detail" required readonly rows="3" style="text-align: justify;"></textarea>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myalasan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Isi Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="separation_reason">Alasan Pisah:</label>
                                        <select id="separation_reason" name="separation_reason" class="form-control">
                                            <option value="">Pilih Alasan</option>
                                            <option value="berpisah_tempat_tinggal">Berpisah Tempat Tinggal
                                            </option>
                                            <option value="berpisah_tempat_tidur">Berpisah Tempat Tidur
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="who_left">Siapa yang Pergi:</label>
                                        <select id="who_left" name="who_left" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="tergugat">Tergugat</option>
                                            <option value="penggugat">Penggugat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="village">Desa:</label>
                                        <input type="text" id="village" name="village" class="form-control" placeholder="Masukkan nama desa">
                                    </div>

                                    <div class="form-group">
                                        <label for="reason_for_leaving">Alasan Meninggalkan:</label>
                                        <select id="reason_for_leaving" name="reason_for_leaving" class="form-control">
                                            <option value="">Pilih Alasan</option>
                                            <option value="diusir">Diusir oleh</option>
                                            <option value="keinginan_sendiri">Keinginan Sendiri</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="date_left">Tanggal Meninggalkan:</label>
                                        <input type="date" id="date_left" name="date_left" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="saveChanges1">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('separation_details').addEventListener('focus', function() {
                            $('#myalasan').modal('show');
                        });


                    

                        document.getElementById('saveChanges1').addEventListener('click', function() {
                            var separation_reason = document.getElementById('separation_reason').value;
                            var who_left = document.getElementById('who_left').value;
                            var village = document.getElementById('village').value;
                            var reason_for_leaving = document.getElementById('reason_for_leaving').value;
                            var date_left = new Date(document.getElementById('date_left').value);

                            var options = {
                                year: 'numeric'
                                , month: 'long'
                                , day: 'numeric'
                            };
                            var date_left_formatted = date_left.toLocaleDateString('id-ID', options);

                            var alasan = `4. Bahwa karena hal-hal tersebut di atas, tidak ada lagi kerukunan antara Penggugat dan Tergugat yang mengakibatkan Penggugat dan Tergugat ${separation_reason}, dimana ${who_left} telah pergi meninggalkan rumah kediaman bersama di desa ${village} (karena ${reason_for_leaving}) sejak tanggal ${date_left_formatted}`;

                            // Ganti 'separation_details' dengan id elemen yang ingin Anda tetapkan nilai

                            document.getElementById('separation_details').value = alasan;
                            $('#myalasan').modal('hide');
                        });

                    </script>
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
</div>
@endsection
