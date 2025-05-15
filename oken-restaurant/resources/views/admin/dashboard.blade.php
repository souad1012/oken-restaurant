@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Reservations</h2>
            <div class="text-4xl font-bold mb-2">{{ \App\Models\Reservation::count() }}</div>
            <p class="text-gray-500">Total reservations</p>
            <div class="mt-4">
                <a href="{{ route('admin.reservations.index') }}" class="text-primary-dark hover:underline">View all reservations</a>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Menu Items</h2>
            <div class="text-4xl font-bold mb-2">{{ \App\Models\Article::count() }}</div>
            <p class="text-gray-500">Total menu items</p>
            <div class="mt-4">
                <a href="{{ route('admin.articles.index') }}" class="text-primary-dark hover:underline">Manage menu</a>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Reviews</h2>
            <div class="text-4xl font-bold mb-2">{{ \App\Models\Review::count() }}</div>
            <p class="text-gray-500">Customer reviews</p>
            <div class="mt-4">
                <a href="{{ route('admin.reviews.index') }}" class="text-primary-dark hover:underline">View all reviews</a>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Reservations</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">Date</th>
                            <th class="px-4 py-2 text-left">Time</th>
                            <th class="px-4 py-2 text-left">Guests</th>
                            <th class="px-4 py-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Reservation::orderBy('created_at', 'desc')->take(5)->get() as $reservation)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $reservation->name }}</td>
                            <td class="px-4 py-2">{{ $reservation->reservation_date->format('M d, Y') }}</td>
                            <td class="px-4 py-2">{{ $reservation->time }}</td>
                            <td class="px-4 py-2">{{ $reservation->guests }}</td>
                            <td class="px-4 py-2">
                                @if($reservation->status == 'confirmed')
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span>
                                @elseif($reservation->status == 'pending')
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                                @else
                                <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Cancelled</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 text-right">
                <a href="{{ route('admin.reservations.index') }}" class="text-primary-dark hover:underline">View all</a>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Reviews</h2>
