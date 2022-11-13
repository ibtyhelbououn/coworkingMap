<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CoworkingSpace;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        
        $bookings = Booking::with('coworkingSpace')->get();
         return view('bookings',compact('bookings'));
              
    }

    public function show(Booking $booking)
    {
        return view('show-booking',compact('booking'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $phoneNumber = $request->input('phoneNumber');
        // $date = $request->input('date');
        // $spots = $request->input('spots');
        // $spaceID = $request->input('spots');
        
        Booking::create($input);

        return redirect('/done');
        
    }

    public function admin()
    {
        
        $bookings = Booking::with('coworkingSpace')->get();
         return view('admin-booking',compact('bookings'));
              
    }

    
}
