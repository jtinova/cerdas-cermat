@extends('auth.app')

@section('container')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="/" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/logo/Logo.png') }}" alt="cerdas cermat">
                                <span class="d-none d-lg-block">erdas cermat</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4 mb-4">Token Tim Anda</h5>
                                    <p class="fw-bold mb-4 text-center">{{ $token }}</p>
                                    <p class="text-center small mb-3">Mohon simpan Token ini, yang akan digunakan untuk pendaftaran anggota kelompok.</p>
                                    <a href="/login">
                                        <button class="btn btn-primary w-100" type="submit">
                                            Masuk
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

    {{-- <div class="container">
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
    </div> --}}
@endsection
