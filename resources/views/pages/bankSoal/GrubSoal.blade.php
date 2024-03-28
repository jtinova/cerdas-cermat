@extends('component.main')

@section('content')
    <div class="pagetitle">
        <h1>Data Soal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Ujian</li>
                <li class="breadcrumb-item"><a href="/pakets">Paket Soal</a></li>
                <li class="breadcrumb-item active">Data Soal</li>
            </ol>
        </nav>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Soal</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Jawaban</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftarSoals as $daftarSoal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $daftarSoal['pertanyaan'] }}</td>
                                        <td>{{ $daftarSoal['jawaban'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
