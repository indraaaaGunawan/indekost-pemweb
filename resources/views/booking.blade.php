@extends('layouts.landingpage')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <div class="container-fluid">
        <!-- Isi halaman booking Anda di sini -->
        <h1 class="text-center">Halaman Booking</h1>
        <!-- Tambahkan formulir atau konten booking Anda di sini -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            placeholder="Masukkan nama lengkap Anda" value="{{ $user->name }}" readonly>
                        <input type="hidden" name="id_kamar" value="{{ $kamar->id }}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Nomor HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control"
                            placeholder="Masukkan nomor HP Anda">
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamar">Room </label>
                        <input type="text" name="tipe_kamar" id="tipe_kamar" class="form-control"
                            placeholder="Masukan Tipe Kamar" value="{{ $kamar->tipe_kamar }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga </label>
                        <input type="number" name="harga" id="harga" class="form-control"
                            placeholder="Masukan Tipe Kamar" value="{{ $kamar->harga }}" readonly>
                    </div>
                    <div>
                        <a href="{{ URL::to('/') }}" class="btn btn-primary">Kembali</a>
                        <button class="btn btn-success" type="submit">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
