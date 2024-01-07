@extends('layouts.default')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <table class="table table-bordered">
                {{-- <thead>
                        <th colspan="2">{{ $ds->brand }} : {{ $ds->type }}</th>
                    </thead> --}}
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
                        <td>{{ $kamar->gambar }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Deskripsi</td>
                        <td>{{ $kamar->deskripsi_kamar }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ URL::to('/home') }}" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i>
                Kembali</a>
        </div>
        <div class="col-md-3 col-md-pull-9"><img src="{{ images('download(3)') }}/{{ $kamar->gambar }}" width="100%"
                height="100%"></div>
    </div>
@stop
