<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::first();
        $reviews = Review::with('user')->where('restaurant_id', $restaurant->id)->paginate(5);
        
        return view('reviews', compact('restaurant', 'reviews'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);
        
        $review = new Review();
        $review->rating = $validated['rating'];
        $review->comment = $validated['comment'];
        $review->restaurant_id = $validated['restaurant_id'];
        $review->user_id = auth()->id();
        $review->save();
        
        return redirect()->route('reviews.index')->with('success', 'Review submitted successfully');
    }
    
    public function adminIndex()
    {
        $reviews = Review::with(['user', 'restaurant'])->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }
    
    public function adminShow(Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }
    
    public function adminDestroy(Review $review)
    {
        $review->delete();
        
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully');
    }
}
