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
    </div><!-- End Page Title -->

    <section class="section">
        <a href="/pakets/create" class="btn btn-primary mb-3">Buat Paket</a>
        <div class="row align-items-top">
            <div class="col-lg-8">

                {{-- Card --}}
                @foreach ($dataPakets as $item)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->jenis_paket }}</h5>
                            <p>
                                Terdiri dari {{ $item->daftarSoals->count() }} soal
                            </p>
                            <form method="POST" action="/pakets/{{ $item->id }}" class="card-text d-flex justify-content-end">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                <a href="/pakets/{{ $item->id }}" class="btn btn-primary m-1">Edit</a>
                                <a href="/pakets/soal/{{ $item->id }}/1" class="btn btn-primary m-1">Detail</a>
                            </form>
                        </div>
                    </div>
                @endforeach
                <!-- End Card -->

            </div>
        </div>
    </section>
@endsection
