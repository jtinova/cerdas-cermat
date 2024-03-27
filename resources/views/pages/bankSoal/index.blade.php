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
                            <p class="card-text d-flex flex-row-reverse">
                                <a href="/pakets/soal/{{ $item->id }}/1" class="btn btn-primary">Detail</a>
                            </p>
                        </div>
                    </div>
                @endforeach
                <!-- End Card -->

            </div>
        </div>
    </section>
@endsection