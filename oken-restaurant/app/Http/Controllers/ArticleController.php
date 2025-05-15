<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('category')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }
    
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('admin.articles.create', compact('restaurants'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'restaurant_id' => 'required|exists:restaurants,id',
            'category' => 'required|in:main,starter,dessert',
            'image' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $validated['image'] = $path;
        }
        
        Article::create($validated);
        
        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully');
    }
    
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }
    
    public function edit(Article $article)
    {
        $restaurants = Restaurant::all();
        return view('admin.articles.edit', compact('article', 'restaurants'));
    }
    
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'restaurant_id' => 'required|exists:restaurants,id',
            'category' => 'required|in:main,starter,dessert',
            'image' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            
            $path = $request->file('image')->store('articles', 'public');
            $validated['image'] = $path;
        }
        
        $article->update($validated);
        
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully');
    }
    
    public function destroy(Article $article)
    {
        // Delete image
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        
        $article->delete();
        
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully');
    }
}
