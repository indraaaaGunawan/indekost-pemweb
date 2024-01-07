@extends('layouts.app')

@section('title', 'Room Detail')

@section('contents')
    <h1 class="mb-0">Room Detail</h1>
    <hr />
    <img src="{{ url('images/' . $kamar->gambar) }}" style="height: 200px; width:200px;" class="d-flex mb-3 mx-auto">
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Type Room</label>
            <input type="text" name="tipe_kamar" class="form-control" placeholder="Type Room"
                value="{{ $kamar->tipe_kamar }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="harga" class="form-control" placeholder="Price" value="{{ $kamar->harga }}"
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
            <label class="form-label">Images</label>
            <input type="text" name="gambar" class="form-control" placeholder="Image" value="{{ $kamar->gambar }}"
                readonly>
            <!-- Jika ingin menampilkan gambar, Anda bisa menggunakan tag <img> atau menyesuaikan dengan kebutuhan -->
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Room Description</label>
            <textarea class="form-control" name="deskripsi" placeholder="Room Description" readonly>{{ $kamar->deskripsi_kamar }}</textarea>
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
