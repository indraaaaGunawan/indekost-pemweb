@extends('layouts.landingpage')

@section('content')
    <div class="container">
        <h1>Booking List</h1>

        <a href="{{ route('booking.create') }}" class="btn btn-primary mb-3">Add Booking</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Booking Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>
                            <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
