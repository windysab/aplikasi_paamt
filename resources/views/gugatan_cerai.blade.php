<!-- resources/views/gugatan_cerai.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="custom-accordion">
                <div class="card">
                    <div class="card-header bg-danger font-weight-bold text-center">
                        <h4>Pendaftaran Gugatan Cerai</h4>
                    </div>

                    <div class="card-body bg-success">
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
                                        placeholder="isi Alamat lengkap" required readonly></textarea>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Klik untuk mengisi alamat
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Alamat</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Jalan <input type="text" name="jalan" id="jalan" class="form-control"
                                                    required>
                                                No. <input type="text" name="no" id="no" class="form-control" required>
                                                RT. <input type="text" name="rt" id="rt" class="form-control" required>
                                                RW <input type="text" name="rw" id="rw" class="form-control" required>
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

                                                    <button type="button" class="btn btn-primary" id="saveButton"
                                                        data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                            <script>
                                                document.getElementById('saveButton').addEventListener('click', function() {
                                                    var jalan = document.getElementById('jalan').value;
                                                    var no = document.getElementById('no').value;
                                                    var rt = document.getElementById('rt').value;
                                                    var rw = document.getElementById('rw').value;
                                                    var desa_kelurahan = document.getElementById('desa_kelurahan').value;
                                                    var kecamatan = document.getElementById('kecamatan').value;
                                                    var kabupaten = document.getElementById('kabupaten').value;

                                                    var alamat = `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                                    document.getElementById('alamat_penggugat').value = alamat;
                                                    $('#exampleModal').modal('hide');
                                                });

                                            </script>
                                        </div>
                                    </div>
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
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="umur_penggugat">Umur Tergugat:</label>
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

                                <!-- Pekerjaan Tergugat -->

                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pekerjaan_tergugat">Pekerjaan
                                                    Tergugat:</label>
                                                <input type="text" class="form-control" id="pekerjaan_tergugat"
                                                    name="pekerjaan_tergugat" placeholder="Masukkan Pekerjaan Tergugat"
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

                                <!-- Alamat Tergugat -->
                                <div class="form-group">
                                    <label for="alamat_tergugat">Alamat Tergugat:</label>
                                    <textarea name="alamat_tergugat" id="alamat_tergugat" class="form-control"
                                        placeholder="isi Alamat lengkap" required readonly></textarea>
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal_tergugat">
                                    Klik untuk mengisi alamat
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_tergugat" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel_tergugat" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel_tergugat">Alamat</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Jalan <input type="text" name="jalan_tergugat" id="jalan_tergugat"
                                                    class="form-control" required>
                                                No. <input type="text" name="no_tergugat" id="no_tergugat"
                                                    class="form-control" required>
                                                RT. <input type="text" name="rt_tergugat" id="rt_tergugat"
                                                    class="form-control" required>
                                                RW <input type="text" name="rw_tergugat" id="rw_tergugat"
                                                    class="form-control" required>
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
                                                        id="saveButton_tergugat" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                            <script>
                                                document.getElementById('saveButton_tergugat').addEventListener('click', function() {
                                                    var jalan = document.getElementById('jalan_tergugat').value;
                                                    var no = document.getElementById('no_tergugat').value;
                                                    var rt = document.getElementById('rt_tergugat').value;
                                                    var rw = document.getElementById('rw_tergugat').value;
                                                    var desa_kelurahan = document.getElementById('desa_kelurahan_tergugat').value;
                                                    var kecamatan = document.getElementById('kecamatan_tergugat').value;
                                                    var kabupaten = document.getElementById('kabupaten_tergugat').value;

                                                    var alamat = `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                                    document.getElementById('alamat_tergugat').value = alamat;
                                                    $('#exampleModal_tergugat').modal('hide');
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>


                                <!-- Informasi Lainnya -->
                                <h4>Informasi Lainnya</h4>
                                <h6>Dengan hormat, Penggugat mengajukan cerai gugat dengan alasan-alasan/dalil-dalil
                                    sebagai berikut :
                                </h6>
                                <!-- Alasan Cerai -->
                                <div class="form-group">
                                    <textarea name="alasan_cerai" id="alasan_cerai" class="form-control" placeholder="s"
                                        required readonly hidden></textarea>
                                </div>
                                <!-- Tombol Pop up -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal_alasan">
                                    Klik untuk merubah No.1
                                </button>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_alasan" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModal_alasan" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal_alasan">1. Bahwa Penggugat
                                                    dengan Tergugat telah melangsungkan pernikahan pada</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form id="myForm_tergugat">
                                                <div class="modal-body">
                                                    Hari <input type="text" name="hari" id="hari" class="form-control"
                                                    required readonly>
                                                    Tanggal <input type="date" name="tanggal" id="tanggal"
                                                        class="form-control" required>
                                                    Desa/Kelurahan <input type="text" name="desa_kelurahan_alasan"
                                                        id="desa_kelurahan_alasan" class="form-control" required>
                                                    Kecamatan <input type="text" name="kecamatan_alasan"
                                                        id="kecamatan_alasan" class="form-control" required>
                                                    Kabupaten <input type="text" name="kabupaten_alasan"
                                                        id="kabupaten_alasan" class="form-control" required>
                                                    <h6 class="modal-title" id="exampleModal_alasan">kemudian Tergugat
                                                        mengucapkan shigat taklik talak terhadap Penggugat sesuai dengan
                                                        Kutipan/Duplikat Kutipan Akta Nikah</h6>
                                                    Nomor Akta Nikah <input type="text" name="no_akta_nikah"
                                                        id="no_akta_nikah" class="form-control" required>
                                                    Tanggal Akta Nikah <input type="date" name="tanggal_akta_nikah"
                                                        id="tanggal_akta_nikah" class="form-control" required>
                                                    KUA Kecamatan <input type="text" name="kua_kecamatan"
                                                        id="kua_kecamatan" class="form-control" required>
                                                    Kabupaten <input type="text" name="kua_kabupaten"
                                                        id="kua_kabupaten" class="form-control" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" id="saveButton_alasan"
                                                        data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                            <script>
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

                                                    var alasan = `1.	Bahwa Penggugat dengan Tergugat telah melangsungkan pernikahan pada hari ${hari}, tanggal ${tanggal} di Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}, kemudian Tergugat mengucapkan shigat taklik talak terhadap Penggugat sesuai dengan Kutipan/Duplikat Kutipan Akta Nikah Nomor ${no_akta_nikah}, tanggal ${tanggal_akta_nikah} dari Kantor Urusan Agama Kecamatan ${kua_kecamatan}, Kabupaten ${kua_kabupaten}`;

                                                    document.getElementById('alasan_cerai').value = alasan;
                                                    $('#exampleModal_alasan').modal('hide');
                                                });
                                            </script>
                                        </div>
                                    </div>
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
                                {{-- <div class="container">
                                    <h2>Button Elements</h2>
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                    <button type="button" class="btn btn-info">Button</button>
                                    <input type="button" class="btn btn-info" value="Input Button">
                                    <input type="submit" class="btn btn-info" value="Submit Button">
                                </div> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
