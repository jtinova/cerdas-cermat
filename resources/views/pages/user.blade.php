@extends('component.main')

@section('content')
    <div class="pagetitle">
        <h1>Data User</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex justify-content-end">
                            <button onclick="window.location.href='{{ route('user.create') }}'" class="mb-3 btn btn-primary">
                                Tambah
                            </button>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3">Nama</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Role</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-4 py-4">
                                            {{ $user->pesertas == null ? $user->admin->nama : $user->pesertas->nama }}</td>
                                        <td class="px-4 py-4">{{ $user['email'] }}</td>
                                        <td class="px-4 py-4">{{ $user['level'] }}</td>
                                        <td class="px-4 py-4">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
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
@endsection
