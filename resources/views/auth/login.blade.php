@extends('auth.app')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-1 px-sm-5 py-sm-4 text-center">
                        <img class="logo mx-auto mb-4" src="{{ asset('assets/img/logo/Logo.png') }}" alt="Your Company">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                        @if (session('loginError'))
                            <div class="alert alert-danger">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Alamat Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                                <button type="button" class="btn btn-show-password" onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary btn-auth fw-bold fs-6" type="submit">
                                    Masuk
                                </button>
                            </div>    
                        </form>
                        <p class="mt-4">Tidak memiliki Akun? <a href="/register/ketua">Daftar disini</a> </p>
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
