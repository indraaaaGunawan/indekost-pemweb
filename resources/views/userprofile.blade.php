@extends('layouts.landingpage')

@section('title', 'Welcome to Kosan Kita')

@section('header', 'Welcome to Kosan Kita')

@section('subtitle', 'Temukan Kosan Nyaman dan Terjangkau')

@section('content')
    <h1 class="text-center">Profile User</h1>
    <div class="row">
        <div class="col-md-6 col-md-push-3 mx-auto">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="18%">Name</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td width="18%">Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ URL::to('/') }}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>
                Back</a>
        </div>
    </div>

@stop
