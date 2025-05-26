@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-8">
        <!-- Reservations Stats -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-indigo-50">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Reservations</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Reservation::count() }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.reservations.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                    View all reservations →
                </a>
            </div>
        </div>

        <!-- Menu Items Stats -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-green-50">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Menu Items</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Article::count() }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.articles.index') }}" class="text-sm font-medium text-green-600 hover:text-green-500">
                    View menu items →
                </a>
            </div>
        </div>

        <!-- Reviews Stats -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-yellow-50">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Customer Reviews</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Review::count() }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.reviews.index') }}" class="text-sm font-medium text-yellow-600 hover:text-yellow-500">
                    View all reviews →
                </a>
            </div>
        </div>

        <!-- Restaurants Stats -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-red-50">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Restaurants</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Restaurant::count() }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.restaurants.index') }}" class="text-sm font-medium text-red-600 hover:text-red-500">
                    View restaurants →
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Reservations -->
        <div class="bg-white shadow-sm rounded-lg border border-gray-200">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900">Recent Reservations</h3>
                <div class="mt-6 flow-root">
                    <div class="-my-5 divide-y divide-gray-200">
                        @foreach(\App\Models\Reservation::orderBy('created_at', 'desc')->take(5)->get() as $reservation)
                            <div class="py-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-900">{{ $reservation->name }}</h4>
                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ $reservation->guests }} guests • {{ $reservation->reservation_date->format('M d, Y') }} at {{ $reservation->time }}
                                        </p>
                                    </div>
                                    <span class="px-2.5 py-1 text-xs font-medium rounded-full
                                        @if($reservation->status == 'confirmed') bg-green-100 text-green-800
                                        @elseif($reservation->status == 'pending') bg-yellow-100 text-yellow-800
                                        @else bg-red-100 text-red-800 @endif">
                                        {{ ucfirst($reservation->status) }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('admin.reservations.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        View all reservations →
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Reviews -->
        <div class="bg-white shadow-sm rounded-lg border border-gray-200">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900">Recent Reviews</h3>
                <div class="mt-6 flow-root">
                    <div class="-my-5 divide-y divide-gray-200">
                        @foreach(\App\Models\Review::orderBy('created_at', 'desc')->take(5)->get() as $review)
                            <div class="py-4">
                                <div class="flex items-center gap-4">
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm font-medium text-gray-900">{{ $review->user->name }}</h4>
                                        <p class="mt-1 text-sm text-gray-600 line-clamp-2">{{ $review->comment }}</p>
                                        <p class="mt-1 text-xs text-gray-500">{{ $review->created_at->format('M d, Y') }}</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('admin.reviews.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        View all reviews →
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
