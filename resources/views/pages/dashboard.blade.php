@extends('component.main')

@section('content')
    @if (auth()->user()->level === 'admin')
        <section>
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <p>Selamat datang {{ $myData->nama }}</p>
            </div>
            <div class="row">
                <!-- Peserta Card -->
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Peserta <span>/ Tim</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">{{ $countPeserta }} Peserta / {{ $countTim }} Tim</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Peserta Card -->

                <!-- Bank Card -->
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Bank Soal</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bank"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">50</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Bank Card -->
                <!-- Jadwal Card -->
                <div class="col-xxl-3 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Ujian</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-calendar"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">30 Mei 2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Jadwal Card -->
                <!-- Belum Mengerjakan Card -->
                <div class="col-xxl-3 col-md-4 order-1">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">Belum Mengerjakan</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">200 Peserta</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Belum Mengerjakan Card -->
                <!-- Sedang Mengerjakan Card -->
                <div class="col-xxl-3 col-md-4 order-1">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">Sedang Mengerjakan</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">0 Peserta</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Sedang Mengerjakan Card -->
                <!-- Sudah Mengerjakan Card -->
                <div class="col-xxl-3 col-md-4 order-1">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            <h5 class="card-title">Sudah Mengerjakan</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-4">
                                    <h6 class="mb-0">0 Peserta</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Sudah Mengerjakan Card -->
            </div><!-- End Row -->
        </section>
    @elseif (auth()->user()->level === 'peserta')
        <section>
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <p>Selamat datang {{ $myData->nama }}</p>
            </div>

            <!-- Jadwal Card -->
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Jadwal Ujian</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar"></i>
                            </div>
                            <div class="ps-4">
                                <h6 class="mb-0">30 Mei 2024</h6>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Jadwal Card -->
        </section>
    @endif
@endsection
