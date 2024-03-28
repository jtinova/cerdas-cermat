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
                            <h5 class="card-title">Paket {{ $daftarPaket->jenis_paket }}</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3">No</th>
                                        <th class="px-4 py-3">Soal</th>
                                        <th class="px-4 py-3">Jawaban</th>
                                        <th class="px-4 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftarSoals as $daftarSoal)
                                        <tr>
                                            <td class="px-4 py-4 text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-4 py-4 text-center">{{ $daftarSoal['pertanyaan'] }}</td>
                                            <td class="px-4 py-4 text-center">{{ $daftarSoal['jawaban'] }}</td>
                                            <td class="px-4 py-4 text-center">
                                                <form method="POST" action="/pakets/soal/{{ $daftarSoal->id }}"
                                                    class="card-text d-flex justify-content-end">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                                    <a href="/pakets/soal/{{ $daftarSoal->id }}"
                                                        class="btn btn-primary m-1">Update</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
