@extends('layouts.app')

@section('title', 'Show Kamar')

@section('contents')
    <h1 class="mb-0">Detail Kamar</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tipe Kamar</label>
            <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar"
                value="{{ $kamar->tipe_kamar }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $kamar->harga }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $kamar->status }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="gambar" class="form-control" placeholder="Gambar" value="{{ $kamar->gambar }}"
                readonly>
            <!-- Jika ingin menampilkan gambar, Anda bisa menggunakan tag <img> atau menyesuaikan dengan kebutuhan -->
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Deskripsi Kamar</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kamar" readonly>{{ $kamar->deskripsi_kamar }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $kamar->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $kamar->updated_at }}" readonly>
        </div>
    </div>
@endsection
