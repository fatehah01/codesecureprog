{{-- resources/views/cars.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Cars for Booking</h1>
    <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('storage/' . $car->image) }}" class="card-img-top" alt="{{ $car->model }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->model }}</h5>
                    <p class="card-text">{{ $car->description }}</p>
                    <a href="{{ route('bookings.create', ['car' => $car->id]) }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
