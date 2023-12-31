@extends('layouts.app')

@section('title', 'Edit Room')

@section('contents')
    <h1 class="mb-0">Edit Room</h1>
    <hr />
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column align-items-center mb-3 mx-auto text-center">
            <img src="{{ url('images/' . $kamar->gambar) }}" style="height: 200px; width:200px;" alt="Gambar Kamar">
            <span class="mt-2">{{ $kamar->gambar }}</span>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar"
                    value="{{ $kamar->tipe_kamar }}">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $kamar->harga }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $kamar->status }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="gambar" class="form-control" placeholder="Gambar" value="{{ $kamar->gambar }}">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi_kamar" placeholder="Deskripsi">{{ $kamar->deskripsi_kamar }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    @endsection
