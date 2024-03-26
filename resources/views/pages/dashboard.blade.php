@extends('component.main')

@section('content')
    @if (auth()->user()->level === 'admin')
        <section>
            <h2>Dashboard</h2>
            <p>Selamat datang {{ $myData->nama }}</p>
        </section>
    @elseif (auth()->user()->level === 'peserta')
        <section>
            <h2>Dashboard</h2>
            <p>Selamat datang {{ $myData->nama }}</p>
        </section>
    @endif
@endsection
