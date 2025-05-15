@extends('layouts.app')

@section('content')
    <!-- Confirmation Section -->
    <section class="py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    
                    <h1 class="text-3xl font-bold mb-4">Reservation Confirmed!</h1>
                    <p class="text-gray-600 mb-6">
                        Thank you for choosing OKEN Restaurant. We have received your reservation request and will 
                        confirm it shortly. You will receive a confirmation email with the details of your reservation.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('home') }}" class="bg-primary-dark text-white px-6 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Return to Home</a>
                        <a href="{{ route('menu') }}" class="border border-primary-dark text-primary-dark px-6 py-3 rounded-sm font-medium hover:bg-gray-100 transition">View Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Information -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold text-center mb-8">What to Expect</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-100 rounded-lg p-6 text-center">
                        <div class="w-16 h-16 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Email Confirmation</h3>
                        <p class="text-gray-600">
                            You will receive a detailed confirmation email with your reservation information.
                        </p>
                    </div>
                    
                    <div class="bg-gray-100 rounded-lg p-6 text-center">
                        <div class="w-16 h-16 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Arrival Time</h3>
                        <p class="text-gray-600">
                            Please arrive 5-10 minutes before your scheduled reservation time.
                        </p>
                    </div>
                    
                    <div class="bg-gray-100 rounded-lg p-6 text-center">
                        <div class="w-16 h-16 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Need to Change?</h3>
                        <p class="text-gray-600">
                            If you need to modify or cancel your reservation, please contact us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
