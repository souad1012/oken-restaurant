<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        $restaurant = Restaurant::first();
        
        return view('contact', compact('restaurant'));
    }

    /**
     * Send a contact message.
     */
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // In a real application, you would send an email here
        // For example:
        // Mail::to('info@oken-restaurant.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}