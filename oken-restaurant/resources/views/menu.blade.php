@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Our Menu</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    Explore our carefully crafted menu featuring the finest ingredients and culinary expertise.
                    Each dish is prepared with passion and attention to detail.
                </p>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Main Dishes -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Main Dish</h2>
                    
                    @foreach($mainDishes as $dish)
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold">{{ $dish->name }}</h3>
                                <div class="flex items-center">
                                    <span class="text-gray-600 mr-2">-</span>
                                    <span class="font-medium">${{ number_format($dish->price, 2) }}</span>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm">{{ $dish->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Starters -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Starters</h2>
                    
                    @foreach($starters as $starter)
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('images/' . $starter->image) }}" alt="{{ $starter->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold">{{ $starter->name }}</h3>
                                <div class="flex items-center">
                                    <span class="text-gray-600 mr-2">-</span>
                                    <span class="font-medium">${{ number_format($starter->price, 2) }}</span>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm">{{ $starter->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Desserts -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-6">Dessert</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($desserts as $dessert)
                    <div class="flex items-center">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('images/' . $dessert->image) }}" alt="{{ $dessert->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold">{{ $dessert->name }}</h3>
                                <div class="flex items-center">
                                    <span class="text-gray-600 mr-2">-</span>
                                    <span class="font-medium">${{ number_format($dessert->price, 2) }}</span>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm">{{ $dessert->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Featured Image -->
            <div class="mt-16">
                <img src="{{ asset('images/menu-featured.jpg') }}" alt="Featured dish" class="w-full h-96 object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Special Offers</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Weekend Brunch</h3>
                    <p class="text-gray-600 mb-4">
                        Join us every Saturday and Sunday from 10 AM to 2 PM for our special brunch menu.
                        Enjoy a complimentary glass of mimosa with any brunch entrée.
                    </p>
                    <p class="font-medium">$35 per person</p>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Chef's Tasting Menu</h3>
                    <p class="text-gray-600 mb-4">
                        Experience a curated 5-course tasting menu showcasing our chef's signature dishes.
                        Available daily for dinner with optional wine pairing.
                    </p>
                    <p class="font-medium">$75 per person</p>
                </div>
            </div>
        </div>
    </section>
@endsection
