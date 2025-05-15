@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img src="{{ asset('images/hero-bg.jpg') }}" alt="Chef preparing food" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center text-center">
            <div class="max-w-4xl px-4">
                <h1 class="text-white text-4xl md:text-6xl font-bold mb-6">DISCOVER THE TASTE OF PERFECTION</h1>
                <p class="text-white text-lg md:text-xl mb-8">Experience culinary excellence at OKEN Restaurant</p>
                <a href="{{ route('reservation') }}" class="bg-white text-gray-900 px-8 py-3 rounded-sm font-medium hover:bg-gray-200 transition">Book a Table</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">ABOUT OKEN</h2>
                    <p class="text-gray-300 mb-6">
                        Inspired traditions and infused with the vibrant flavors of Japan, 
                        OKEN was founded with a passion for creating memorable dining experiences. 
                        Our chefs combine the finest local ingredients with exceptional culinary 
                        techniques to craft dishes that are as beautiful to behold as they are to taste.
                    </p>
                    <a href="{{ route('about') }}" class="inline-block border border-white text-white px-6 py-2 hover:bg-white hover:text-gray-900 transition">Learn More</a>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/about-image.jpg') }}" alt="Delicious dish" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Dishes Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Frequently Orders</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredArticles as $article)
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->name }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $article->name }}</h3>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-500">${{ number_format($article->price, 2) }}</span>
                            <div class="flex">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-10">
                <a href="{{ route('menu') }}" class="inline-block bg-primary-dark text-white px-8 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Order Now</a>
            </div>
        </div>
    </section>

    <!-- Chefs Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">CULINARY MASTERS BEHIND</h2>
            <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">
                From classic techniques to modern creativity, every dish at Restaurant OKEN is prepared to offer a 
                harmonious blend of flavors. Explore our unique menu featuring:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="relative h-80">
                        <img src="{{ asset('images/chef1.jpg') }}" alt="Chef Isabella Rossi" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white p-4 rounded-tl-3xl">
                            <h3 class="text-xl font-semibold">Isabella Rossi</h3>
                            <p class="text-gray-500">Executive Chef</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="relative h-80">
                        <img src="{{ asset('images/chef2.jpg') }}" alt="Chef Liam Chen" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white p-4 rounded-tl-3xl">
                            <h3 class="text-xl font-semibold">Liam Chen</h3>
                            <p class="text-gray-500">Sous Chef</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="relative h-80">
                        <img src="{{ asset('images/chef3.jpg') }}" alt="Chef Maria Lopez" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white p-4 rounded-tl-3xl">
                            <h3 class="text-xl font-semibold">Maria Lopez</h3>
                            <p class="text-gray-500">Pastry Chef</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12">
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <img src="{{ asset('images/customers.jpg') }}" alt="Happy customers" class="w-full h-64 object-cover rounded-lg mb-6">
                    <p class="text-gray-600 italic mb-4">
                        "The dining experience at OKEN was exceptional. The flavors were exquisite and the presentation was artful. 
                        We'll definitely be returning soon!"
                    </p>
                    <p class="font-semibold">- The Johnson Family</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section class="py-16 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Book your table now</h2>
                
                <form action="{{ route('reservation.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Name" class="w-full px-4 py-2 border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:border-white">
                        <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:border-white">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="number" name="persons" placeholder="Persons" min="1" class="w-full px-4 py-2 border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:border-white">
                        <input type="time" name="time" placeholder="Timing" class="w-full px-4 py-2 border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:border-white">
                        <input type="date" name="date" placeholder="Date" class="w-full px-4 py-2 border border-gray-600 bg-transparent text-white placeholder-gray-400 focus:outline-none focus:border-white">
                    </div>
                    
                    <div class="mt-6">
                        <button type="submit" class="bg-white text-gray-900 px-8 py-3 rounded-sm font-medium hover:bg-gray-200 transition">Book a table</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
