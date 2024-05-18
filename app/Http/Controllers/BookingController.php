<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create(Car $car)
    {
        return view('bookings.create', compact('car'));
    }

    public function store(Request $request)
    {
    $booking = new Booking();
    $booking->car_id = $request->car_id;
    $booking->date = $request->date;
    $booking->save();

    return redirect()->route('cars.index')->with('success', 'Car booked successfully!');
    }
    
}
