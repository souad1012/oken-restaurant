<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::first();
        $featuredArticles = Article::where('is_featured', true)->get();
        $mainDishes = Article::where('category', 'main')->get();
        $starters = Article::where('category', 'starter')->get();
        $desserts = Article::where('category', 'dessert')->get();
        
        return view('home', compact('restaurant', 'featuredArticles', 'mainDishes', 'starters', 'desserts'));
    }
    
    public function about()
    {
        $restaurant = Restaurant::first();
        $mainDishes = Article::where('category', 'main')->get();

        return view('about', compact('restaurant', 'mainDishes'));
    }
    
    public function menu()
    {
        $mainDishes = Article::where('category', 'main')->get();
        $starters = Article::where('category', 'starter')->get();
        $desserts = Article::where('category', 'dessert')->get();
        
        return view('menu', compact('mainDishes', 'starters', 'desserts'));
    }
    
    public function gallery()
    {
        $articles = Article::all();
        return view('gallery', compact('articles'));
    }
    
    public function chefs()
    {
        return view('chefs');
    }
}
