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

                            <div class="card-body container">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                    <p class="text-center small">Masukkan data Anda untuk membuat Akun</p>
                                </div>

                                <div class="row text-center mb-5">
                                    <div class="col">
                                        <a href="/register/ketua">
                                            <button class="btn w-100 mb-2 mb-md-0">Ketua</button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary w-100">Anggota</button>
                                    </div>
                                </div>

                                <form action="/register/anggota" method="POST">
                                    @csrf
                                    <div class="col-12 mb-3">
                                        <label for="nama_anggota" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_anggota" class="form-control" id="nama_anggota"
                                            required>
                                        <div class="invalid-feedback">Tolong, masukkan nama</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="email" class="form-label">Email Anda</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Tolong masukkan nama yang sesuai!</div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                            <button type="button" class="btn-show-password input-group-text"
                                                onclick="togglePasswordVisibility()">
                                                <i id="password-toggle-icon" class="bi bi-eye-slash"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Tolong masukkan password Anda</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="token" class="form-label">Token</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="token" class="form-control" id="token"
                                                required>
                                            <div class="invalid-feedback">Tolong masukkan token Anda</div>
                                        </div>
                                    </div>

                                    <div hidden>
                                        <input type="level" name="level" id="level" value="peserta">
                                    </div>
                                    <div hidden>
                                        <input type="status" name="status" id="status" value="anggota">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="small mb-0">Telah memiliki akun? <a href="/login">Log in</a>
                                        </p>
                                    </div>
                                </form>

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
                    <div class="container card-body p-1 px-sm-5 py-sm-5 text-center">
                        <img class="logo mx-auto mb-4" src="{{ asset('assets/img/logo/Logo.png') }}" alt="Your Company">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                        <div class="row text-center mb-5">
                            <div class="col">
                                <a href="/register/ketua">
                                    <button class="btn w-100 mb-2 mb-md-0">Ketua</button>
                                </a>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary w-100">Anggota</button>
                            </div>
                        </div>

                        <form action="/register/anggota" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="nama_anggota" id="nama_anggota" class="form-control"
                                    placeholder="NamaAnggota">
                                <label for="nama_anggota">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Alamat Email</label>
                            </div>
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                                <button type="button" class="btn btn-show-password" onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="token" id="token" class="form-control"
                                    placeholder="Token">
                                <label for="token">Token</label>
                            </div>
                            <div hidden>
                                <input type="level" name="level" id="level" value="peserta">
                            </div>
                            <div hidden>
                                <input type="status" name="status" id="status" value="anggota">
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary btn-auth fw-bold fs-6" type="submit">
                                    Masuk
                                </button>
                            </div>
                        </form>
                        <p class="mt-4">Telah memiliki akun? <a href="/login">Login disini</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordButton = document.querySelector(".btn-show-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordButton.innerHTML = '<i class="bi bi-eye"></i>';
            } else {
                passwordInput.type = "password";
                passwordButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
            }
        }
    </script>
@endsection
