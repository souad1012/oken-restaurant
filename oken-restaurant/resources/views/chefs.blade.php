@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Our Culinary Team</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    Meet the talented chefs behind OKEN's exceptional cuisine. Their passion, creativity, and expertise
                    bring our menu to life.
                </p>
            </div>
        </div>
    </section>

    <!-- Executive Chef -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold mb-4">Isabella Rossi</h2>
                    <p class="text-gray-600 font-medium mb-2">Executive Chef</p>
                    <p class="text-gray-600 mb-6">
                        With over 15 years of experience in fine dining establishments across Europe and Asia, 
                        Chef Isabella brings a wealth of knowledge and creativity to OKEN. Her culinary philosophy 
                        centers on respecting traditional techniques while embracing innovation.
                    </p>
                    <p class="text-gray-600 mb-6">
                        "My goal is to create dishes that tell a story and evoke emotion. Food should be an experience 
                        that engages all the senses." - Isabella Rossi
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/chef1.jpg') }}" alt="Chef Isabella Rossi" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Other Chefs -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Meet Our Team</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6 flex flex-col md:flex-row">
                    <img src="{{ asset('images/chef2.jpg') }}" alt="Chef Liam Chen" class="w-full md:w-1/3 h-64 md:h-auto object-cover rounded-lg mb-4 md:mb-0 md:mr-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Liam Chen</h3>
                        <p class="text-gray-500 font-medium mb-4">Sous Chef</p>
                        <p class="text-gray-600 mb-4">
                            Chef Liam specializes in fusion cuisine, expertly blending Asian and European flavors. 
                            His innovative approach has contributed significantly to OKEN's unique menu offerings.
                        </p>
                        <p class="text-gray-600 italic">
                            "I believe in pushing boundaries while honoring culinary traditions."
                        </p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6 flex flex-col md:flex-row">
                    <img src="{{ asset('images/chef3.jpg') }}" alt="Chef Maria Lopez" class="w-full md:w-1/3 h-64 md:h-auto object-cover rounded-lg mb-4 md:mb-0 md:mr-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Maria Lopez</h3>
                        <p class="text-gray-500 font-medium mb-4">Pastry Chef</p>
                        <p class="text-gray-600 mb-4">
                            With a background in French patisserie, Chef Maria creates exquisite desserts that are the 
                            perfect finale to any meal at OKEN. Her attention to detail and artistic presentation make 
                            her creations truly special.
                        </p>
                        <p class="text-gray-600 italic">
                            "Dessert should be a beautiful conclusion to the dining experience."
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <img src="{{ asset('images/chef4.jpg') }}" alt="Chef Alex Kim" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Alex Kim</h3>
                    <p class="text-gray-500 font-medium mb-4">Grill Master</p>
                    <p class="text-gray-600">
                        Specializing in perfectly cooked meats and seafood, Chef Alex brings precision and flavor to every dish.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <img src="{{ asset('images/chef5.jpg') }}" alt="Chef Sophie Martin" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Sophie Martin</h3>
                    <p class="text-gray-500 font-medium mb-4">Saucier</p>
                    <p class="text-gray-600">
                        Chef Sophie's sauces elevate every dish with complex flavors and perfect balance.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <img src="{{ asset('images/chef6.jpg') }}" alt="Chef David Patel" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">David Patel</h3>
                    <p class="text-gray-500 font-medium mb-4">Vegetable Chef</p>
                    <p class="text-gray-600">
                        Chef David transforms seasonal produce into stunning vegetable-focused dishes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Our Team -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Join Our Culinary Team</h2>
                <p class="text-gray-600 mb-8">
                    We're always looking for passionate and talented individuals to join our team. If you're dedicated to 
                    culinary excellence and want to be part of a creative, collaborative environment, we'd love to hear from you.
                </p>
                <a href="#" class="inline-block bg-primary-dark text-white px-8 py-3 rounded-sm font-medium hover:bg-gray-800 transition">View Opportunities</a>
            </div>
        </div>
    </section>
@endsection
