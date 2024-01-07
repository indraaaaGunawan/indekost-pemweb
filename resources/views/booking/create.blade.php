@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Booking</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="booking_date" class="form-label">Booking Date</label>
                <input type="datetime-local" class="form-control" id="booking_date" name="booking_date" required>
            </div>
            <!-- Add inputs for other columns if needed -->
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
