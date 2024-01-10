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
                                        <!-- Binti Penggugat -->
                                        <div class="col-md-6 mb-3">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="binti_penggugat">Binti Penggugat:</label>
                                                <input type="text" class="form-control" id="binti_penggugat"
                                                    name="binti_penggugat" value="{{ $gugatanCerai->binti_penggugat }}">
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




                            </div>
                            <!-- ... Add other form fields here ... -->
                            <h4>Informasi Tergugat</h4>










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