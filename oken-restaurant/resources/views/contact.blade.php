@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Contact Us</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    We'd love to hear from you. Reach out with any questions, feedback, or to inquire about private events.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 md:pr-8 mb-8 md:mb-0">
                        <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
                        <p class="text-gray-600 mb-8">
                            Whether you have a question about our menu, want to book a private event, or simply want to say hello,
                            we're here to help. Fill out the form and we'll get back to you as soon as possible.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-primary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Address</h3>
                                    <p class="text-gray-600">123 Restaurant Street, City, State, ZIP</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-primary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Phone</h3>
                                    <p class="text-gray-600">(123) 456-7890</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-primary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Email</h3>
                                    <p class="text-gray-600">info@oken-restaurant.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="w-6 h-6 text-primary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Hours</h3>
                                    <p class="text-gray-600">Monday - Thursday: 11:00 AM - 10:00 PM</p>
                                    <p class="text-gray-600">Friday - Saturday: 11:00 AM - 11:00 PM</p>
                                    <p class="text-gray-600">Sunday: 12:00 PM - 9:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2">
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <form>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                        <input type="text" name="name" id="name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" name="email" id="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                    <input type="text" name="subject" id="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">
                                </div>
                                
                                <div class="mb-6">
                                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                    <textarea name="message" id="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark"></textarea>
                                </div>
                                
                                <button type="submit" class="w-full bg-primary-dark text-white px-6 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Find Us</h2>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-96 w-full">
                        <!-- Replace with actual map embed code -->
                        <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                            <p class="text-gray-600">Map Embed Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
