<!-- resources/views/gugatan_cerai.blade.php -->

@extends('layouts.app')

@section('content')
<div class="main">

    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="images/form-img.jpg" alt="">
                <div class="signup-img-content">
                    <h2>Register now </h2>
                    <p>while seats are available !</p>
                </div>
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">First name</label>
                                <input type="text" name="first_name" id="first_name" />
                            </div>
                            <div class="form-input">
                                <label for="last_name" class="required">Last name</label>
                                <input type="text" name="last_name" id="last_name" />
                            </div>
                            <div class="form-input">
                                <label for="company" class="required">Company</label>
                                <input type="text" name="company" id="company" />
                            </div>
                            <div class="form-input">
                                <label for="email" class="required">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="form-input">
                                <label for="phone_number" class="required">Phone number</label>
                                <input type="text" name="phone_number" id="phone_number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-select">
                                <div class="label-flex">
                                    <label for="meal_preference">meal preference</label>
                                    <a href="#" class="form-link">Lunch detail</a>
                                </div>
                                <div class="select-list">
                                    <select name="meal_preference" id="meal_preference">
                                        <option value="Vegetarian">Vegetarian</option>
                                        <option value="Kosher">Kosher</option>
                                        <option value="Asian Vegetarian">Asian Vegetarian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-radio">
                                <div class="label-flex">
                                    <label for="payment">Payment Mode</label>
                                    <a href="#" class="form-link">Payment Detail</a>
                                </div>
                                <div class="form-radio-group">
                                    <div class="form-radio-item">
                                        <input type="radio" name="payment" id="cash" checked>
                                        <label for="cash">Cash</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="payment" id="cheque">
                                        <label for="cheque">Cheque</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="payment" id="demand">
                                        <label for="demand">Demand Draf</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="chequeno">DD / Cheque No.</label>
                                <input type="text" name="chequeno" id="chequeno" />
                            </div>
                            <div class="form-input">
                                <label for="blank_name">Drawn on ( Bank Name)</label>
                                <input type="text" name="blank_name" id="blank_name" />
                            </div>
                            <div class="form-input">
                                <label for="payable">Payable at</label>
                                <input type="text" name="payable" id="payable" />
                            </div>
                        </div>
                    </div>
                    <div class="donate-us">
                        <label>Donate us</label>
                        <div class="price_slider ui-slider ui-slider-horizontal">
                            <div id="slider-margin"></div>
                            <span class="donate-value" id="value-lower"></span>
                        </div>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                        <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
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
                                    </div>
                                </div>

                                <!-- Umur Penggugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-4">
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
                                    </div>
                                </div>

                                <!-- Agama -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="agama_penggugat">Agama:</label>
                                                <select name="agama_penggugat" id="agama_penggugat" class="form-control"
                                                    required>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
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
                                    </div>
                                </div>

                                <!-- Pendidikan Penggugat -->
                                <div id="personal-data" class="collapse show">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="pendidikan_penggugat">Pendidikan Penggugat:</label>
                                                <select name="pendidikan_penggugat" id="pendidikan_penggugat" class="form-control" required onchange="checkOther(this)">
                                                    <option value="sd">SD</option>
                                                    <option value="tidak_tamat_sd">Tidak Tamat SD</option>
                                                    <option value="sltp">SLTP</option>
                                                    <option value="slta">SLTA</option>
                                                    <option value="d1">D-1</option>
                                                    <option value="d2">D-2</option>
                                                    <option value="d3">D-3</option>
                                                    <option value="sarjana">Sarjana</option>
                                                    <option value="lain-lain">Lain-lain</option>
                                                </select>
                                                <input type="text" id="otherField" class="form-control" name="pendidikan_penggugat" style="display: none;" placeholder="Masukkan Pendidikan">
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
                                    if (select.value == "lain-lain") {
                                        otherInput.style.display = "block";
                                    } else {
                                        otherInput.style.display = "none";
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
                                <div class="form-group">
                                    <label for="nama_tergugat">Nama Tergugat:</label>
                                    <input type="text" name="nama_tergugat" id="nama_tergugat" class="form-control"
                                        required>
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
