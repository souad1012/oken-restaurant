@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Make a Reservation</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    Reserve your table at OKEN and prepare for an unforgettable dining experience.
                </p>
            </div>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <h2 class="text-2xl font-bold mb-6">Book your table</h2>
                        
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <form action="{{ route('reservation.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                <div>
                                    <label for="persons" class="block text-gray-700 font-medium mb-2">Number of Guests</label>
                                    <input type="number" name="persons" id="persons" value="{{ old('persons', 2) }}" min="1" max="20" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                </div>
                                <div>
                                    <label for="date" class="block text-gray-700 font-medium mb-2">Date</label>
                                    <input type="date" name="date" id="date" value="{{ old('date', date('Y-m-d', strtotime('+1 day'))) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                </div>
                                <div>
                                    <label for="time" class="block text-gray-700 font-medium mb-2">Time</label>
                                    <select name="time" id="time" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                        <option value="12:00" {{ old('time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                                        <option value="13:00" {{ old('time') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
                                        <option value="14:00" {{ old('time') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
                                        <option value="18:00" {{ old('time') == '18:00' ? 'selected' : '' }}>6:00 PM</option>
                                        <option value="19:00" {{ old('time') == '19:00' ? 'selected' : '' }}>7:00 PM</option>
                                        <option value="20:00" {{ old('time') == '20:00' ? 'selected' : '' }}>8:00 PM</option>
                                        <option value="21:00" {{ old('time') == '21:00' ? 'selected' : '' }}>9:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="special_requests" class="block text-gray-700 font-medium mb-2">Special Requests (Optional)</label>
                                <textarea name="special_requests" id="special_requests" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">{{ old('special_requests') }}</textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="bg-primary-dark text-white px-8 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Book a table</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Information -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Reservation Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-4">Opening Hours</h3>
                        <ul class="space-y-2">
                            <li class="flex justify-between">
                                <span class="text-gray-600">Monday - Thursday:</span>
                                <span>11:00 AM - 10:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-600">Friday - Saturday:</span>
                                <span>11:00 AM - 11:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-600">Sunday:</span>
                                <span>12:00 PM - 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-4">Contact</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="text-gray-600 mr-2">Phone:</span>
                                <span>(123) 456-7890</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gray-600 mr-2">Email:</span>
                                <span>reservations@oken-restaurant.com</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gray-600 mr-2">Address:</span>
                                <span>123 Restaurant Street, City, State, ZIP</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-4">Policies</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>Reservations are held for 15 minutes past the scheduled time.</li>
                            <li>For parties of 6 or more, please call directly.</li>
                            <li>Cancellations should be made at least 24 hours in advance.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
