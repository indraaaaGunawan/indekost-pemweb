<!-- resources/views/welcome.blade.php -->

@extends('layouts.landingpage')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <!-- Contoh Kosan Item -->
    <div class="kosan-item">
        <h2>Kosan Indah</h2>
        <img src="{{ asset('images/download (3).jpeg') }}" alt="Kosan Indah Image" style="max-width: 300px;">
        <p>Terletak strategis di pusat kota. Fasilitas lengkap dan harga terjangkau.</p>
        <p><strong>Harga:</strong> Rp 500.000/bulan</p>
        <p><strong>Fasilitas:</strong> Kamar mandi luar</p>
        <a href="{{ route('detail', ['id' => $id]) }}" class="btn btn-primary">Lihat Detail</a>
        <button class="btn btn-primary">Book Kamar</button>
    </div>

    <div class="kosan-item">
        <h2>Kosan Indah</h2>
        <p>Terletak strategis di pusat kota. Fasilitas lengkap dan harga terjangkau.</p>
        <p><strong>Harga:</strong> Rp 850.000/bulan</p>
        <p><strong>Alamat:</strong> Jl. Jend. Sudirman No. 123</p>
        <P><strong>Tipe Kamar:</strong> A</P>
        <P><strong>Fasilitas:</strong>Kamar mandi dalam</P>
        <button class="btn btn-primary">Lihat Detail</button>
        <button class="btn btn-primary">Book Kamar</button>
        <a href="/booking.index" class="btn btn-primary">Booking</a>
    </div>

    <!-- Tambahkan lebih banyak item kosan sesuai kebutuhan -->
@endsection
