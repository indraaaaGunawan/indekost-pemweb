@extends('layouts.landingpage')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="18%">Type Room</td>
                        <td>{{ $kamar->tipe_kamar }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Harga</td>
                        <td>Rp <?php echo number_format($kamar->harga); ?></td>
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
                Kembali</a>
        </div>
    </div>
@stop
