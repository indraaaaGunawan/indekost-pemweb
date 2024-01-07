@extends('layouts.landingpage')

@section('title', 'Welcome to Kosan Kita')

@section('header', 'Welcome to Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-push-3 mx-auto">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="18%">Type Room</td>
                        <td>{{ $kamar->tipe_kamar }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Harga</td>
                        <td>Rp {{ number_format($kamar->harga) }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Status</td>
                        <td>{{ $kamar->status }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Gambar</td>
                        <td>
                            <img src="{{ asset('images/' . $kamar->gambar) }}" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <td width="18%">Deskripsi</td>
                        <td>{{ $kamar->deskripsi_kamar }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ URL::to('/') }}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>
                Back</a>
        </div>
    </div>

@stop
