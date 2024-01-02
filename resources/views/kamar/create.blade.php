@extends('layouts.app')

@section('title', 'Create Kamar')

@section('contents')
    <h1 class="mb-0">Add Kamar</h1>
    <hr />
    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi_kamar" placeholder="Deskripsi"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection