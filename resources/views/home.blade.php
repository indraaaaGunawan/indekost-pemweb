<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <!-- Contoh Kosan Item -->
    <div class="kosan-item">
        <h2>Kosan Indah</h2>
        <p>Terletak strategis di pusat kota. Fasilitas lengkap dan harga terjangkau.</p>
        <p><strong>Harga:</strong> Rp 500.000/bulan</p>
        <button class="btn btn-primary">Lihat Detail</button>
        <button class="btn btn-primary">Book Kamar</button>
    </div>

    <!-- Tambahkan lebih banyak item kosan sesuai kebutuhan -->
@endsection
