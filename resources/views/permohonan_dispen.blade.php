@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0">Formulir Permohonan Dispensasi</h2>
                </div>
                <div class="card-body bg-success">
                    <form method="POST" action="{{ route('permohonan_dispen.submit') }}">
                        @csrf
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">

                            <h2 class="mb-3" style="text-align: center;">Data Pemohon</h2>
                            <h5 class="mb-3">Data Pemohon I ( Ayah )</h5>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nama_pemohonI">Nama Pemohon I:</label>
                                        <input type="text" class="form-control" id="nama_pemohonI" name="nama_pemohonI" placeholder="Nama Lengkap Pemohon I" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="umur_pemohonI">Umur Pemohon I:</label>
                                        <input type="number" class="form-control" id="umur_pemohonI" name="umur_pemohonI" placeholder="Umur Pemohon I" required>
                                    </div>
                                </div>
                                <!-- Tambahkan input untuk field lainnya -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="pekerjaan_pemohonI">Pekerjaan Pemohon I:</label>
                                        <input type="text" class="form-control" id="pekerjaan_pemohonI" name="pekerjaan_pemohonI" placeholder="Pekerjaan Pemohon I" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pendidikan_pemohonI">Pendidikan Pemohon I:</label>
                                        <select name="pendidikan_pemohonI" id="pendidikan_pemohonI" class="form-control" required onchange="checkOther(this)">
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
                                        <input type="text" id="otherField_pendidikan_pemohonI" class="form-control" name="pendidikan_pemohonI" style="display: none;" placeholder="pendidikan_pemohonI">
                                        <script>
                                            function checkOther(select) {
                                                var otherInputId = "otherField_" + select.id;
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
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat_pemohonI">Alamat Pemohon I:</label>
                                <textarea name="alamat_pemohonI" id="alamat_pemohonI" class="form-control" placeholder="Alamat lengkap Pemohon I" required readonly></textarea>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Alamat Pemohon I</h5>
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
                                            <button type="button" class="btn btn-success" id="saveButton">Simpan</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('alamat_pemohonI').addEventListener('focus', function() {
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
                                    if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                        swal("Peringatan!", "Mohon lengkapi Data terlebih dahulu!", "warning");
                                        return;
                                    }
                                    var alamat =
                                        `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;
                                    document.getElementById('alamat_pemohonI').value = alamat;
                                    $('#exampleModal').modal('hide');
                                });

                            </script>

                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                            <h5 class="mb-3">Data Pemohon II ( Ibu )</h5>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nama_pemohonII">Nama Pemohon II:</label>
                                        <input type="text" class="form-control" id="nama_pemohonII" name="nama_pemohonII" placeholder="Nama Lengkap Pemohon II" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="umur_pemohonII">Umur Pemohon II:</label>
                                        <input type="number" class="form-control" id="umur_pemohonII" name="umur_pemohonII" placeholder="Umur Pemohon II" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="pekerjaan_pemohonII">Pekerjaan Pemohon II:</label>
                                        <input type="text" class="form-control" id="pekerjaan_pemohonII" name="pekerjaan_pemohonII" placeholder="Pekerjaan Pemohon II" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pendidikan_pemohonII">Pendidikan Pemohon II:</label>
                                        <select name="pendidikan_pemohonII" id="pendidikan_pemohonII" class="form-control" required onchange="checkOther(this)">
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="tidak_tamat_sd">Tidak Tamat SD</option>
                                            <option value="sd">SD</option>
                                            <option value="sltp">SLTP</option>
                                            <option value="slta">SLTA</option>
                                            <option value="d1">D-1</option>
                                            <option value=" d2">D-2</option>
                                            <option value="d3">D-3</option>
                                            <option value="sarjana">Sarjana</option>
                                            <option value="lain-lain">Lain-lain</option>
                                        </select>
                                        <br>
                                        <input type="text" id="otherField_pendidikan_pemohonII" class="form-control" name="pendidikan_pemohonII" style="display: none;" placeholder="pendidikan pemohon II">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_pemohonII">Alamat Pemohon II:</label>
                                    <textarea name="alamat_pemohonII" id="alamat_pemohonII" class="form-control" placeholder="Alamat lengkap Pemohon II" required></textarea>
                                </div>
                                <div class="modal fade" id="exampleModal_pemohonII" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_pemohonII" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title" id="exampleModalLabel_pemohonII">Alamat Pemohon II</h5>
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
                                                <button type="button" id="saveButton_tergugat" class="btn btn-success">Simpan</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('alamat_pemohonII').addEventListener('focus', function() {
                                        $('#exampleModal_pemohonII').modal('show');
                                    });
                                    document.getElementById('saveButton_tergugat').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan_tergugat').value;
                                        var no = document.getElementById('no_tergugat').value;
                                        var rt = document.getElementById('rt_tergugat').value;
                                        var rw = document.getElementById('rw_tergugat').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan_tergugat').value;
                                        var kecamatan = document.getElementById('kecamatan_tergugat').value;
                                        var kabupaten = document.getElementById('kabupaten_tergugat').value;

                                        if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi data terlebih dahulu!", "warning");
                                            return;
                                        }

                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_pemohonII').value = alamat;
                                        $('#exampleModal_pemohonII').modal('hide');
                                    });
                                    // Rest of your JavaScript code

                                </script>

                            </div>
                        </div>
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">
                            <h3 class="mb-3" style="text-align: center;">Data Calon Suami/Isteri</h3>
                            <h5 class="mb-3">Calon Mempelai Suami/Isteri</h5>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nama_calon">Nama Calon Suami/Isteri:</label>
                                        <input type="text" class="form-control" id="nama_calon" name="nama_calon" placeholder="Nama Calon Suami/Isteri" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="umur_calon">Umur Calon Suami/Isteri:</label>
                                        <input type="number" class="form-control" id="umur_calon" name="umur_calon" placeholder="Umur Calon Suami/Isteri" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="pekerjaan_calon">Pekerjaan Calon
                                                Suami/Isteri:</label>
                                            <input type="text" class="form-control" id="pekerjaan_calon" name="pekerjaan_calon" placeholder="Pekerjaan Calon Suami/Isteri" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pendidikan_calon">Pendidikan Calon
                                                Suami/Isteri:</label>
                                            <select name="pendidikan_calon" id="pendidikan_calon" class="form-control" required onchange="checkOther(this)">
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
                                            <input type="text" id="otherField_pendidikan_calon" class="form-control" name="pendidikan_calon" style="display: none;" placeholder="pendidikan_calon">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_calon">Alamat Calon Suami/Isteri:</label>
                                    <textarea name="alamat_calon" id="alamat_calon" class="form-control" placeholder="Alamat lengkap Calon Suami/Isteri" required></textarea>
                                </div>
                                <div class="modal fade" id="exampleModal_calon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_calon" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title" id="exampleModalLabel_calon">Alamat Calon Suami/Isteri</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body bg-light">
                                                <div class="form-group">
                                                    <label for="jalan_calon">Jalan</label>
                                                    <input type="text" name="jalan_calon" id="jalan_calon" class="form-control" required>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2">
                                                        <label for="no_calon">No.</label>
                                                        <input type="text" name="no_calon" id="no_calon" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rt_calon">RT.</label>
                                                        <input type="text" name="rt_calon" id="rt_calon" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="rw_calon">RW</label>
                                                        <input type="text" name="rw_calon" id="rw_calon" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="desa_kelurahan_calon">Desa/Kelurahan</label>
                                                        <input type="text" name="desa_kelurahan_calon" id="desa_kelurahan_calon" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="kecamatan_calon">Kecamatan</label>
                                                        <input type="text" name="kecamatan_calon" id="kecamatan_calon" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="kabupaten_calon">Kabupaten</label>
                                                        <input type="text" name="kabupaten_calon" id="kabupaten_calon" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer btn btn-light">
                                                <button type="button" id="saveButton_calon" class="btn btn-success">Simpan</button>
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('alamat_calon').addEventListener('focus', function() {
                                        $('#exampleModal_calon').modal('show');
                                    });
                                    document.getElementById('saveButton_calon').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan_calon').value;
                                        var no = document.getElementById('no_calon').value;
                                        var rt = document.getElementById('rt_calon').value;
                                        var rw = document.getElementById('rw_calon').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan_calon').value;
                                        var kecamatan = document.getElementById('kecamatan_calon').value;
                                        var kabupaten = document.getElementById('kabupaten_calon').value;

                                        if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi data terlebih dahulu!", "warning");
                                            return;
                                        }

                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_calon').value = alamat;
                                        $('#exampleModal_calon').modal('hide');
                                    });
                                    // Rest of your JavaScript code

                                </script>
                                <h5 class="mb-3">Calon Mempelai Suami/Isteri</h5>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="nama_calonII">Nama Calon Suami/Isteri II:</label>
                                            <input type="text" class="form-control" id="nama_calonII" name="nama_calonII" placeholder="Nama Calon Suami/Isteri II" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="umur_calonII">Umur Calon Suami/Isteri II:</label>
                                            <input type="number" class="form-control" id="umur_calonII" name="umur_calonII" placeholder="Umur Calon Suami/Isteri II" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="pekerjaan_calonII">Pekerjaan Calon
                                                    Suami/Isteri II:</label>
                                                <input type="text" class="form-control" id="pekerjaan_calonII" name="pekerjaan_calonII" placeholder="Pekerjaan Calon Suami/Isteri II" required>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- ... -->
                                                <label for="pendidikan_calonII">Pendidikan Calon
                                                    Suami/Isteri II:</label>
                                                <select name="pendidikan_calonII" id="pendidikan_calonII" class="form-control" required onchange="checkOther(this)">
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
                                                <input type="text" id="otherField_pendidikan_calonII" class="form-control" name="pendidikan_calonII" style="display: none;" placeholder="pendidikan_calonII">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_calonII">Alamat Calon Suami/Isteri II:</label>
                                            <textarea name="alamat_calonII" id="alamat_calonII" class="form-control" placeholder="Alamat lengkap Calon Suami/Isteri II" required></textarea>
                                        </div>
                                        <div class="modal fade" id="exampleModal_calonII" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_calonII" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-info text-white">
                                                        <h5 class="modal-title" id="exampleModalLabel_calonII">Alamat Calon Suami/Isteri</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body bg-light">
                                                        <div class="form-group">
                                                            <label for="jalan_calonII">Jalan</label>
                                                            <input type="text" name="jalan_calonII" id="jalan_calonII" class="form-control" required>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="no_calonII">No.</label>
                                                                <input type="text" name="no_calonII" id="no_calonII" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="rt_calonII">RT.</label>
                                                                <input type="text" name="rt_calonII" id="rt_calonII" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="rw_calonII">RW</label>
                                                                <input type="text" name="rw_calonII" id="rw_calonII" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="desa_kelurahan_calonII">Desa/Kelurahan</label>
                                                                <input type="text" name="desa_kelurahan_calonII" id="desa_kelurahan_calonII" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="kecamatan_calonII">Kecamatan</label>
                                                                <input type="text" name="kecamatan_calonII" id="kecamatan_calonII" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="kabupaten_calonII">Kabupaten</label>
                                                                <input type="text" name="kabupaten_calonII" id="kabupaten_calonII" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer btn btn-light">
                                                        <button type="button" id="saveButton_calonII" class="btn btn-success">Simpan</button>
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                            <script>
                                                document.getElementById('alamat_calonII').addEventListener('focus', function() {
                                                    $('#exampleModal_calonII').modal('show');
                                                });
                                                document.getElementById('saveButton_calonII').addEventListener('click', function() {
                                                    var jalan = document.getElementById('jalan_calonII').value;
                                                    var no = document.getElementById('no_calonII').value;
                                                    var rt = document.getElementById('rt_calonII').value;
                                                    var rw = document.getElementById('rw_calonII').value;
                                                    var desa_kelurahan = document.getElementById('desa_kelurahan_calonII').value;
                                                    var kecamatan = document.getElementById('kecamatan_calonII').value;
                                                    var kabupaten = document.getElementById('kabupaten_calonII').value;
                                                    if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                                        swal("Peringatan!", "Mohon lengkapi data terlebih dahulu!", "warning");
                                                        return;
                                                    }
                                                    var alamat =
                                                        `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;
                                                    document.getElementById('alamat_calonII').value = alamat;
                                                    $('#exampleModal_calonII').modal('hide');
                                                });

                                            </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">
                            <h3 class="mb-3" style="text-align: center;">Data Calon Suami Isteri</h3>
                            <h5 class="mb-3">Tempat menikah (ditolak)</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="kecamatan">Kecamatan:</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="kabupaten">Kabupaten:</label>
                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required>
                                </div>
                            </div>
                            <br>
                            <h5 class="mb-3">No Surat Penolakan KUA</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="surat_keterangan">Surat Keterangan dari :</label>
                                    <input type="text" class="form-control" id="surat_keterangan" name="surat_keterangan" placeholder="Surat Keterangan dari" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nomor_surat">Nomor Surat:</label>
                                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tahun">Tanggal Surat :</label>
                                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" required>
                                </div>

                                {{-- <script>
                                    document.getElementById('tanggal_surat').addEventListener('change', function (e) {
                                        var selectedDate = e.target.value;
                                        // Call your search function here with the selected date
                                        searchByDate(selectedDate);
                                    });

                                    function searchByDate(date) {
                                        // Implement your search logic here
                                        console.log("Searching for documents on date: " + date);
                                    }
                                </script> --}}

                                <script>
                                    document.getElementById('tanggal_surat').addEventListener('change', function (e) {
                                        var selectedDate = e.target.value;
                                        // Call your search function here with the selected date
                                        searchByDate(selectedDate);
                                    });

                                    document.getElementById('reset_date').addEventListener('click', function () {
                                        document.getElementById('tanggal_surat').value = '';
                                    });

                                    function searchByDate(date) {
                                        // Implement your search logic here
                                        console.log("Searching for documents on date: " + date);
                                    }
                                </script>
                            </div>
                            <br>
                            <h5 class="mb-3">Lama hubungan calon </h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="tahun">Berapa Tahun :</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="-" required min="0" step="1">
                                </div>
                                <div class="col-md-3">
                                    <label for="bulan">Berapa Bulan :</label>
                                    <input type="number" class="form-control" id="bulan" name="bulan" placeholder="-" required min="0" step="1">
                                </div>
                                <div class="col-md-6">
                                    <label for="tahun">penghasilan calon (Rp):</label>
                                    <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="penghasilan calon (Rp)" required>
                                </div>

                                <script>
                                    document.getElementById('penghasilan').addEventListener('input', function (e) {
                                        var value = e.target.value.replace(/\D/g, '');
                                        if (!isNaN(value) && value.length > 0) {
                                            e.target.value = 'Rp. ' + parseInt(value).toLocaleString('id-ID');
                                        } else {
                                            e.target.value = '';
                                        }
                                    });
                                </script>
                            </div>
                            <br>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="tahun">penghasilan calon (Rp):</label>
                                    <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="penghasilan calon (Rp)" required>
                                </div>

                                <script>
                                    document.getElementById('penghasilan').addEventListener('input', function (e) {
                                        var value = e.target.value.replace(/\D/g, '');
                                        if (!isNaN(value) && value.length > 0) {
                                            e.target.value = 'Rp. ' + parseInt(value).toLocaleString('id-ID');
                                        } else {
                                            e.target.value = '';
                                        }
                                    });
                                </script>
                            </div> --}}
                        </div>
                        <div class="card-body bg-info" style="border: 1px solid white; padding: 20px; margin: 10px;">
                            <h3 class="mb-3">Data Mertua Laki-laki</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nama_mertua_laki">Nama Mertua Laki-laki:</label>
                                    <input type="text" class="form-control" id="nama_mertua_laki" name="nama_mertua_laki" placeholder="Nama Mertua Laki-laki" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="umur_mertua_laki">Umur Mertua Laki-laki:</label>
                                    <input type="number" class="form-control" id="umur_mertua_laki" name="umur_mertua_laki" placeholder="Umur Mertua Laki-laki" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pekerjaan_mertua_laki">Pekerjaan Mertua Laki-laki:</label>
                                    <input type="text" class="form-control" id="pekerjaan_mertua_laki" name="pekerjaan_mertua_laki" placeholder="Pekerjaan Mertua Laki-laki" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pendidikan_mertua_laki">Pendidikan Mertua Laki-laki:</label>
                                    <select name="pendidikan_mertua_laki" id="pendidikan_mertua_laki" class="form-control" required onchange="checkOther(this)">
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
                                    <input type="text" id="otherField_pendidikan_mertua_laki" class="form-control" name="pendidikan_mertua_laki" style="display: none;" placeholder="pendidikan_mertua_laki">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat_mertua_laki">Alamat Mertua Laki-laki:</label>
                                <textarea name="alamat_mertua_laki" id="alamat_calonML" class="form-control" placeholder="Alamat lengkap Mertua Laki-laki" required readonly></textarea>
                            </div>
                            <div class="modal fade" id="exampleModal_calonML" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_calonML" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title" id="exampleModalLabel_calonML">Alamat Calon Mertua Laki-laki</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body bg-light">
                                            <div class="form-group">
                                                <label for="jalan_calonML">Jalan</label>
                                                <input type="text" name="jalan_calonML" id="jalan_calonML" class="form-control" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label for="no_calonML">No.</label>
                                                    <input type="text" name="no_calonML" id="no_calonML" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="rt_calonML">RT.</label>
                                                    <input type="text" name="rt_calonML" id="rt_calonML" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="rw_calonML">RW</label>
                                                    <input type="text" name="rw_calonML" id="rw_calonML" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="desa_kelurahan_calonML">Desa/Kelurahan</label>
                                                    <input type="text" name="desa_kelurahan_calonML" id="desa_kelurahan_calonML" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="kecamatan_calonML">Kecamatan</label>
                                                    <input type="text" name="kecamatan_calonML" id="kecamatan_calonML" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="kabupaten_calonML">Kabupaten</label>
                                                    <input type="text" name="kabupaten_calonML" id="kabupaten_calonML" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer btn btn-light">
                                            <button type="button" id="saveButton_calonML" class="btn btn-success">Simpan</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                                <!-- Modal -->
                                <script>
                                    document.getElementById('alamat_calonML').addEventListener('focus', function() {
                                        $('#exampleModal_calonML').modal('show');
                                    });
                                    document.getElementById('saveButton_calonML').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan_calonML').value;
                                        var no = document.getElementById('no_calonML').value;
                                        var rt = document.getElementById('rt_calonML').value;
                                        var rw = document.getElementById('rw_calonML').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan_calonML').value;
                                        var kecamatan = document.getElementById('kecamatan_calonML').value;
                                        var kabupaten = document.getElementById('kabupaten_calonML').value;

                                        if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi data terlebih dahulu!", "warning");
                                            return;
                                        }

                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_calonML').value = alamat;
                                        $('#exampleModal_calonML').modal('hide');
                                    });
                                    // Rest of your JavaScript code

                                </script>

                            <h3 class="mb-3">Data Mertua Perempuan</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nama_mertua_perempuan">Nama Mertua Perempuan:</label>
                                    <input type="text" class="form-control" id="nama_mertua_perempuan" name="nama_mertua_perempuan" placeholder="Nama Mertua Perempuan" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="umur_mertua_perempuan">Umur Mertua Perempuan:</label>
                                    <input type="number" class="form-control" id="umur_mertua_perempuan" name="umur_mertua_perempuan" placeholder="Umur Mertua Perempuan" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pekerjaan_mertua_perempuan">Pekerjaan Mertua
                                        Perempuan:</label>
                                    <input type="text" class="form-control" id="pekerjaan_mertua_perempuan" name="pekerjaan_mertua_perempuan" placeholder="Pekerjaan Mertua Perempuan" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pendidikan_mertua_perempuan">Pendidikan Mertua
                                        Perempuan:</label>
                                    <select name="pendidikan_mertua_perempuan" id="pendidikan_mertua_perempuan" class="form-control" required onchange="checkOther(this)">
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
                                    <input type="text" id="otherField_pendidikan_mertua_perempuan" class="form-control" name="pendidikan_mertua_perempuan" style="display: none;" placeholder="pendidikan_mertua_perempuan">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="alamat_mertua_perempuan">Alamat Mertua Perempuan:</label>
                                <textarea name="alamat_mertua_perempuan" id="alamat_calonMP" class="form-control" placeholder="Alamat lengkap Mertua Perempuan" required readonly></textarea>
                            </div>
                            <div class="modal fade" id="exampleModal_calonMP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_calonMP" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title" id="exampleModalLabel_calonMP">Alamat Mertua Perempuan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body bg-light">
                                            <div class="form-group">
                                                <label for="jalan_calonMP">Jalan</label>
                                                <input type="text" name="jalan_calonMP" id="jalan_calonMP" class="form-control" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label for="no_calonMP">No.</label>
                                                    <input type="text" name="no_calonMP" id="no_calonMP" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="rt_calonMP">RT.</label>
                                                    <input type="text" name="rt_calonMP" id="rt_calonMP" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="rw_calonMP">RW</label>
                                                    <input type="text" name="rw_calonMP" id="rw_calonMP" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="desa_kelurahan_calonMP">Desa/Kelurahan</label>
                                                    <input type="text" name="desa_kelurahan_calonMP" id="desa_kelurahan_calonMP" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="kecamatan_calonMP">Kecamatan</label>
                                                    <input type="text" name="kecamatan_calonMP" id="kecamatan_calonMP" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="kabupaten_calonMP">Kabupaten</label>
                                                    <input type="text" name="kabupaten_calonMP" id="kabupaten_calonMP" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer btn btn-light">
                                            <button type="button" id="saveButton_calonMP" class="btn btn-success">Simpan</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <script>
                                    document.getElementById('alamat_calonMP').addEventListener('focus', function() {
                                        $('#exampleModal_calonMP').modal('show');
                                    });
                                    document.getElementById('saveButton_calonMP').addEventListener('click', function() {
                                        var jalan = document.getElementById('jalan_calonMP').value;
                                        var no = document.getElementById('no_calonMP').value;
                                        var rt = document.getElementById('rt_calonMP').value;
                                        var rw = document.getElementById('rw_calonMP').value;
                                        var desa_kelurahan = document.getElementById('desa_kelurahan_calonMP').value;
                                        var kecamatan = document.getElementById('kecamatan_calonMP').value;
                                        var kabupaten = document.getElementById('kabupaten_calonMP').value;
                                        if (!jalan || !no || !rt || !desa_kelurahan || !kecamatan || !kabupaten) {
                                            swal("Peringatan!", "Mohon lengkapi data terlebih dahulu!", "warning");
                                            return;
                                        }
                                        var alamat =
                                            `${jalan}, No. ${no}, RT. ${rt}, RW ${rw}, Desa/Kelurahan ${desa_kelurahan}, Kecamatan ${kecamatan}, Kabupaten ${kabupaten}`;

                                        document.getElementById('alamat_calonMP').value = alamat;
                                        $('#exampleModal_calonMP').modal('hide');
                                    });

                                </script>




                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" id="submitButton">Kirim
                                    Formulir
                                    Permohonan Dispensasi</button>
                            </div>
                            {{-- <script>
                                document.getElementById('submitButton').addEventListener('click', function(event) {
                                    var inputs = document.getElementsByTagName('input');
                                    for (var i = 0; i < inputs.length; i++) {
                                        if (inputs[i].value === '') {
                                            event.preventDefault(); // Prevent the default form submission
                                            var inputName = inputs[i].getAttribute('id'); // Get the id of the input
                                            swal("Peringatan!", "Mohon lengkapi kolom " + inputName + " terlebih dahulu!", "warning");
                                            return;
                                        }
                                    }
                                });

                            </script> --}}
                            <script>
                                document.getElementById('submitButton').addEventListener('click', function(event) {
                                    var inputs = document.getElementsByTagName('input');
                                    var emptyInputs = []; // Array to store the ids of empty inputs

                                    for (var i = 0; i < inputs.length; i++) {
                                        if (inputs[i].value === '') {
                                            var inputName = inputs[i].getAttribute('id'); // Get the id of the input
                                            swal("Peringatan!", "Mohon lengkapi kolom " + inputName + " terlebih dahulu!", "warning");
                                            return; // Add the id to the array
                                        }
                                    }

                                    if (emptyInputs.length > 0) { // If there are any empty inputs
                                        event.preventDefault(); // Prevent the default form submission
                                        swal("Peringatan!", "Mohon lengkapi kolom " + emptyInputs.join(', ') + " terlebih dahulu!", "warning");
                                        return;
                                    }
                                });
                            </script>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
