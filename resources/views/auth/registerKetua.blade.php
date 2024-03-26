@extends('auth.app')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="container card-body p-1 px-sm-5 py-sm-4 text-center">
                        <img class="logo mx-auto mb-4" src="{{ asset('assets/img/logo/Logo.png') }}" alt="Your Company">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                        <div class="row text-center mb-5">
                            <div class="col">
                                <button class="btn btn-primary w-100 mb-2 mb-md-0">Ketua</button>
                            </div>
                            <div class="col">
                                <a href="/register/anggota">
                                    <button class="btn w-100">Anggota</button>
                                </a>
                            </div>
                        </div>

                        <form action="/register/ketua" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="nama_tim" id="nama_tim" class="form-control"
                                    placeholder="NamaTim">
                                <label for="nama_tim">Nama Tim</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="institusi" id="institusi" class="form-control"
                                    placeholder="Institusi">
                                <label for="institusi">Institusi</label>
                            </div>
                            <hr class="my-4">
                            <div class="form-floating mb-3">
                                <input type="text" name="nama_ketua" id="nama_ketua" class="form-control"
                                    placeholder="NamaTim">
                                <label for="nama_tim">Nama Lengkap</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Alamat Email</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                                <button type="button" class="btn btn-show-password" onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            <div>
                                <input type="text" name="level" id="level" value="peserta"  hidden>
                            </div>
                            <div>
                                <input type="text" name="status" id="status" value="ketua" hidden>
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
    </div>
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
