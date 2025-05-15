@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-3xl md:text-5xl font-bold text-white mb-6">ABOUT OKEN</h1>
                    <p class="text-gray-300 mb-6">
                        {{ $restaurant->description }}
                    </p>
                    <p class="text-gray-300 mb-6">
                        Our commitment to quality and authenticity has made us a favorite destination for food enthusiasts 
                        seeking an extraordinary culinary journey. Every dish tells a story of tradition, innovation, and passion.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/about-main.jpg') }}" alt="OKEN Restaurant" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Story</h2>
                <p class="text-gray-600 mb-8">
                    Founded in 2015, OKEN began as a small family restaurant with a big dream: to share the authentic 
                    flavors of Japanese cuisine with a modern twist. What started as a passion project quickly gained 
                    recognition for its exceptional quality and innovative approach to traditional recipes.
                </p>
                <p class="text-gray-600 mb-8">
                    Over the years, we've grown into a culinary destination, but our core values remain unchanged. 
                    We still source the freshest ingredients, prepare everything with meticulous attention to detail, 
                    and serve our guests with warmth and hospitality.
                </p>
            </div>
        </div>
    </section>

    <!-- MEALS RIGHT FROM THE OVEN Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">MEALS RIGHT FROM THE OVEN</h2>
                <p class="text-gray-600 text-center mb-10">
                    We believe that every meal is an experience to be cherished. Our restaurant is a culinary haven where tradition 
                    meets innovation. Whether you're joining us for a casual lunch, a romantic dinner, 
                    or a special celebration, we're prepared to offer a memorable blend of flavors.
                </p>
                
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('images/meals-oven.jpg') }}" alt="Meal from oven" class="w-full h-80 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Our Signature Dishes</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($mainDishes->take(6) as $dish)
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $dish->name }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ $dish->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-10">
                <a href="{{ route('menu') }}" class="inline-block bg-primary-dark text-white px-8 py-3 rounded-sm font-medium hover:bg-gray-800 transition">View Full Menu</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Meet Our Team</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="relative h-80">
                        <img src="{{ asset('images/chef1.jpg') }}" alt="Chef Isabella Rossi" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white p-4 rounded-tl-3xl">
                            <h3 class="text-xl font-semibold">Isabella Rossi</h3>
                            <p class="text-gray-500">Executive Chef</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600">
                            With over 15 years of experience in fine dining, Isabella brings creativity and precision to every dish.
                        </p>
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
                    <div class="p-4">
                        <p class="text-gray-600">
                            Liam specializes in fusion cuisine, blending traditional techniques with modern innovations.
                        </p>
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
                    <div class="p-4">
                        <p class="text-gray-600">
                            Maria creates exquisite desserts that are as beautiful as they are delicious.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
