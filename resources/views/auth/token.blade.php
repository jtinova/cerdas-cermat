@extends('auth.app')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-1 px-sm-5 py-sm-4 text-center">
                        <img class="logo mx-auto mb-4" src="{{ asset('assets/img/logo/Logo.png') }}" alt="Your Company">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Token Tim</h5>
                        <p>{{ $token }}</p>
                        <p>Mohon simpan Token ini, yang akan digunakan untuk pendaftaran anggota kelompok.</p>
                        <a href="/login">
                            <button class="btn btn-primary btn-auth fw-bold fs-6" type="submit">
                                Masuk
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
