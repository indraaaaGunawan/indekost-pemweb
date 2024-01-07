@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pemesanan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $booking->name }}" required>
            </div>
            <div class="mb-3">
                <label for="booking_date" class="form-label">Tanggal Pemesanan</label>
                <input type="datetime-local" class="form-control" id="booking_date" name="booking_date" value="{{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d\TH:i') }}" required>
            </div>
            <!-- Tambahkan input untuk kolom-kolom lain jika diperlukan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
