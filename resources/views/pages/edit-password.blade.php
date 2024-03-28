@extends('component.main')

@section('content')
<div class="pagetitle">
    <h1>Ubah Password</h1>
</div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('user.updatePassword', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->pesertas == null ? $user->admin->nama : $user->pesertas->nama }}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary float-end">Ubah Password</button>
            </form>
            <button onclick="window.location.href='{{ route('user') }}'" class="btn btn-danger float-start">
                Kembali
            </button>
        </div>
    </div>
@endsection
