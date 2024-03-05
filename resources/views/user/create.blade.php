@extends('layouts.dashboard')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Tambah user</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Vertical Form</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="{{ route('user.store') }}" enctype="multipart/form-data" class="form form-vertical" method="POST">
                    @csrf
                <div class="form-body">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" id="name" class="form-control" name="name"
                            placeholder="First Name" value="name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email"
                            placeholder="Email" value="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="password-vertical">Password</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Password" value="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class='form-check'>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox3" class='form-check-input' checked>
                                <label for="checkbox3">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection