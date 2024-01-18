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
                        <form action="/submit" method="post">
                            @csrf
                            <div class="row">
                                <!-- Penggugat -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="penggugat">Penggugat:</label>
                                        <input type="text" name="penggugat" id="penggugat" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Tergugat -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="tergugat">Tergugat:</label>
                                        <input type="text" name="tergugat" id="tergugat" class="form-control" required>
                                    </div>
                                </div>
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
</div>
@endsection

