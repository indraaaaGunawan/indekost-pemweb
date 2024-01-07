@extends('layouts.default')

@section('title', 'Selamat Datang di Kosan Kita')

@section('header', 'Selamat Datang di Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    @foreach ($detailsp as $ds)
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <table class="table table-bordered">
                    <thead>
                        <th colspan="2">{{ $ds->brand }} : {{ $ds->type }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="18%">Merk</td>
                            <td>{{ $ds->brand }}</td>
                        </tr>
                        <tr>
                            <td width="18%">Nama/Tipe</td>
                            <td>{{ $ds->type }}</td>
                        </tr>
                        <tr>
                            <td width="18%">Level</td>
                            <td>{{ $ds->category }}</td>
                        </tr>
                        <tr>
                            <td width="18%">Sistem Operasi</td>
                            <td>{{ $ds->ostype }}</td>
                        </tr>
                        <tr>
                            <td width="18%">Deskripsi</td>
                            <td>{{ $ds->description }}</td>
                        </tr>
                        <tr>
                            <td width="18%">Harga</td>
                            <td>Rp <?php echo number_format($ds->price); ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ URL::to('/home') }}" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i>
                    Kembali</a>
            </div>
            <div class="col-md-3 col-md-pull-9"><img src="{{ images('download(3)') }}/{{ $kamar->gambar }}" width="100%"
                    height="100%"></div>
        </div>
    @endforeach
@stop
