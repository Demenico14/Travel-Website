<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Trips() {
        $booking = booking::all();
        return view('trips', ['bookings' => $booking]);
    }

    public function Booking () {
        return view('bookings');
    }
    public function BookingStore (Request $request) {
        $data = $request->validate([
            'Destination' => 'required',
            'Check_In' => 'required|date',
            'Check_Out' => 'required|date',
            'Rooms' => 'required|integer',
            'Adults' => 'required|integer',
            'Children' => 'required|integer',
        ]);

        $newBooking = booking::create($data);

        return redirect(route('trips'));

    }

    public function Message () {
        return view('message');
    }
    public function Edit(booking $book) {
        return view('Edit', ['booking' => $book]);
    }
}
