@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-primary-dark">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Customer Reviews</h1>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    See what our guests have to say about their dining experience at OKEN Restaurant.
                </p>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
                @endif
                
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">What Our Customers Say</h2>
                    
                    @if($reviews->count() > 0)
                        @foreach($reviews as $review)
                        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-semibold">{{ $review->user->name }}</h3>
                                    <p class="text-gray-500 text-sm">{{ $review->created_at->format('F j, Y') }}</p>
                                </div>
                                <div class="flex">
                                    @for($i = 0; $i < 5; $i++)
                                        @if($i < $review->rating)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-600">{{ $review->comment }}</p>
                        </div>
                        @endforeach
                        
                        <div class="mt-8">
                            {{ $reviews->links() }}
                        </div>
                    @else
                        <div class="bg-gray-100 p-6 rounded-lg text-center">
                            <p class="text-gray-600">No reviews yet. Be the first to share your experience!</p>
                        </div>
                    @endif
                </div>
                
                @auth
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-6">Write a Review</h2>
                    
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                        
                        <div class="mb-6">
                            <label for="rating" class="block text-gray-700 font-medium mb-2">Rating</label>
                            <div class="flex space-x-2">
                                @for($i = 1; $i <= 5; $i++)
                                <label class="cursor-pointer">
                                    <input type="radio" name="rating" value="{{ $i }}" class="sr-only" {{ old('rating') == $i ? 'checked' : '' }}>
                                    <svg class="w-8 h-8 text-gray-300 hover:text-yellow-400 rating-star" data-rating="{{ $i }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </label>
                                @endfor
                            </div>
                            @error('rating')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="comment" class="block text-gray-700 font-medium mb-2">Your Review</label>
                            <textarea name="comment" id="comment" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-dark">{{ old('comment') }}</textarea>
                            @error('comment')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="bg-primary-dark text-white px-6 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Submit Review</button>
                    </form>
                </div>
                @else
                <div class="bg-gray-100 p-6 rounded-lg text-center">
                    <p class="text-gray-600 mb-4">Please log in to leave a review.</p>
                    <a href="{{ route('login') }}" class="inline-block bg-primary-dark text-white px-6 py-2 rounded-sm font-medium hover:bg-gray-800 transition">Log In</a>
                </div>
                @endauth
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.rating-star');
        
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.dataset.rating;
                
                stars.forEach(s => {
                    if (s.dataset.rating <= rating) {
                        s.classList.add('text-yellow-400');
                        s.classList.remove('text-gray-300');
                    } else {
                        s.classList.add('text-gray-300');
                        s.classList.remove('text-yellow-400');
                    }
                });
            });
        });
    });
</script>
@endsection
