@extends('layouts.app')

@section('title', 'Add Room')

@section('contents')
    <h1 class="mb-0">Add Room</h1>
    <hr />
    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="tipe_kamar" class="form-control" placeholder="Type Room">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Price">
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
                <textarea class="form-control" name="deskripsi_kamar" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
