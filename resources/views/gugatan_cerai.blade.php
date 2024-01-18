@extends('layouts.app')

@section('content')
<style>
    .card-header,
    .card-body {
        width: 100%;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
            @csrf
        <div class="col-6">
            <!-- Left container -->
            <div class="custom-accordion">
                <div class="card">
                    <div class="d-flex">

                            <div class="card-header bg-danger font-weight-bold text-center">
                                <h4>Pendaftaran Gugatan Cerai</h4>
                            </div>
                    </div>

                    <div class="card-body bg-success">
                        <form method="POST" action="{{ route('gugatan_cerai.submit') }}">
                            @csrf
                            <div class="row">


                            </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <!-- Right container -->
            <!-- Add your content here -->
        </div>
    </div>
</div>
@endsection
