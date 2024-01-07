<!-- resources/views/welcome.blade.php -->

@extends('layouts.landingpage')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    @foreach ($kamar as $k)
        <div class="kosan-item">
            <h2>Room Type {{ $k->tipe_kamar }}</h2>
            {{-- <img src="{{ asset('images/download (3).jpeg') }}" alt="Kosan Indah Image" style="max-width: 300px;"> --}}
            <p>{{ $k->deskripsi_kamar }}</p>
            <p><strong>Harga:</strong> Rp{{ number_format($k->harga) }}</p>
            <a href="{{ route('detail.show', ['id' => $k->id]) }}" class="btn btn-primary">Lihat Detail</a>
            <a href="{{ route('booking', ['id' => $k->id]) }}" class="btn btn-success">Book Room</a>

        </div>
    @endforeach
@endsection
