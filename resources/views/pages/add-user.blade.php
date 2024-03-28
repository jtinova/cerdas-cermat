@extends('component.main')

@section('content')
    <section class="section">
        <div class="pagetitle">
            <h1>Tambah Admin</h1>
        </div><!-- End Page Title -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <button onclick="window.location.href='{{ route('user') }}'" class="mb-3 btn btn-danger">
                            Kembali
                        </button>
                        <!-- General Form Elements -->
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf <!-- Digunakan untuk melindungi formulir dari serangan CSRF -->
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
