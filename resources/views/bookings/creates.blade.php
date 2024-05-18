{{-- resources/views/bookings/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Book a Car</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
</div>
@endsection
