<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::paginate(10);
        return view('admin.restaurants.index', compact('restaurants'));
    }
    
    public function create()
    {
        return view('admin.restaurants.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'opening_hours' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('restaurants', 'public');
            $validated['image'] = $path;
        }
        
        Restaurant::create($validated);
        
        return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant created successfully');
    }
    
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurants.show', compact('restaurant'));
    }
    
    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }
    
    public function update(Request $request, Restaurant $restaurant)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'opening_hours' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($restaurant->image) {
                Storage::disk('public')->delete($restaurant->image);
            }
            
            $path = $request->file('image')->store('restaurants', 'public');
            $validated['image'] = $path;
        }
        
        $restaurant->update($validated);
        
        return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant updated successfully');
    }
    
    public function destroy(Restaurant $restaurant)
    {
        // Delete image
        if ($restaurant->image) {
            Storage::disk('public')->delete($restaurant->image);
        }
        
        $restaurant->delete();
        
        return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant deleted successfully');
    }
}
