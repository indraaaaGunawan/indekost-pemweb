@extends('layouts.landingpage')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')

    <h2>Detail Kamar</h2>

    @foreach($tipe_kamars as $tipe_kamar)
        <div>
            <h3>{{ $tipe_kamar->tipe_kamar }}</h3>
            <img src="{{ $tipe_kamar->gambar }}" alt="{{ $tipe_kamar->tipe_kamar }} Image">
            <p>Status: {{ $tipe_kamar->status }}</p>
            <p>Harga: {{ $tipe_kamar->harga }}</p>
            <p>Deskripsi: {{ $tipe_kamar->deskripsi_kamar }}</p>
        </div>
    @endforeach

@endsection
