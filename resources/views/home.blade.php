<!-- resources/views/welcome.blade.php -->

@extends('layouts.landingpage')

@section('title', 'Welcome to Indekost')

@section('header', 'Welcome to Indekost')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <div class="row">
        @foreach ($kamar as $k)
            <div class="col-md-6">
                <div class="kosan-item">
                    <h2>Room Type {{ $k->tipe_kamar }}</h2>
                    {{-- <img src="{{ asset('images/download (3).jpeg') }}" alt="Kosan Indah Image" style="max-width: 300px;"> --}}
                    <p>{{ $k->deskripsi_kamar }}</p>
                    <p><strong>Price:</strong> Rp{{ number_format($k->harga) }}</p>
                    <a href="{{ route('detail.show', ['id' => $k->id]) }}" class="btn btn-primary">Details</a>
                    <a href="{{ route('booking', ['id' => $k->id]) }}" class="btn btn-success">Booking Room</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
