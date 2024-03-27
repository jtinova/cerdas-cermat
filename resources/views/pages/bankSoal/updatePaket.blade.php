@extends('component.main')

@section('content')
    <div class="pagetitle">
        <h1>Paket Soal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Ujian</li>
                <li class="breadcrumb-item active">Paket Soal</li>
            </ol>
        </nav>

        <div class="col-lg-7">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update Paket</h5>
                    <form action="{{ $paketSoal->id }}/update" method="POST">
                        @csrf
                        <div class="col-12 mb-3">
                            <label for="paket" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" id="paket" name="paket" value="{{ $paketSoal->jenis_paket }}">
                        </div>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
                            </div>
                            <div class="col-auto">
                                <a href="/pakets" class="text-black text-body-tertiary fw-bold">Batal</a>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>

        </div>

    </div>
@endsection
