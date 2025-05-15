@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Our Gallery</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    Feast your eyes on our culinary creations. Each dish is crafted with precision and passion.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $article)
                <div class="relative group overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->name }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 w-full">
                            <h3 class="text-white text-xl font-semibold">{{ $article->name }}</h3>
                            <p class="text-gray-200 text-sm">{{ $article->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Restaurant Ambiance -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Restaurant Ambiance</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="{{ asset('images/restaurant-interior1.jpg') }}" alt="Restaurant Interior" class="w-full h-80 object-cover rounded-lg shadow-md mb-8">
                    <img src="{{ asset('images/restaurant-interior2.jpg') }}" alt="Restaurant Interior" class="w-full h-80 object-cover rounded-lg shadow-md">
                </div>
                <div>
                    <img src="{{ asset('images/restaurant-interior3.jpg') }}" alt="Restaurant Interior" class="w-full h-80 object-cover rounded-lg shadow-md mb-8">
                    <img src="{{ asset('images/restaurant-interior4.jpg') }}" alt="Restaurant Interior" class="w-full h-80 object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>
@endsection
