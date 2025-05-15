<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::first();
        return view('reservation', compact('restaurant'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'persons' => 'required|integer|min:1|max:20',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|string',
        ]);
        
        $restaurant = Restaurant::first();
        
        $reservation = new Reservation();
        $reservation->name = $validated['name'];
        $reservation->email = $validated['email'];
        $reservation->guests = $validated['persons'];
        $reservation->reservation_date = $validated['date'];
        $reservation->time = $validated['time'];
        $reservation->status = 'pending';
        $reservation->restaurant_id = $restaurant->id;
        
        if (auth()->check()) {
            $reservation->user_id = auth()->id();
            $reservation->phone = auth()->user()->phone;
        }
        
        $reservation->save();
        
        return redirect()->route('reservation.confirmation');
    }
    
    public function confirmation()
    {
        return view('reservation-confirmation');
    }
    
    public function adminIndex()
    {
        $reservations = Reservation::orderBy('reservation_date', 'desc')->paginate(10);
        return view('admin.reservations.index', compact('reservations'));
    }
    
    public function adminShow(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }
    
    public function adminUpdate(Request $request, Reservation $reservation)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);
        
        $reservation->status = $validated['status'];
        $reservation->save();
        
        return redirect()->route('admin.reservations.index')->with('success', 'Reservation updated successfully');
    }
}
