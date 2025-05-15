<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        
        // Create regular users
        User::factory(10)->create();
        
        // Create restaurant
        $restaurant = Restaurant::factory()->create([
            'name' => 'OKEN',
            'description' => 'Inspired traditions and infused with the vibrant flavors of Japan, OKEN was founded with a passion for creating memorable dining experiences. Our chefs combine the finest local ingredients with exceptional culinary techniques to craft dishes that are as beautiful to behold as they are to taste.',
        ]);
        
        // Create main dishes
        Article::factory()->count(4)->main()->for($restaurant)->create([
            'is_featured' => false,
        ]);
        
        // Create starters
        Article::factory()->count(4)->starter()->for($restaurant)->create([
            'is_featured' => false,
        ]);
        
        // Create desserts
        Article::factory()->count(2)->dessert()->for($restaurant)->create([
            'is_featured' => false,
        ]);
        
        // Create featured dishes
        Article::factory()->count(3)->for($restaurant)->create([
            'is_featured' => true,
            'name' => fake()->randomElement(['Pancake Stack', 'Eggs Benedict Burger', 'Hawaiian Chicken']),
            'price' => fake()->randomElement([18.00, 13.00, 19.00]),
        ]);
        
        // Create reservations
        Reservation::factory()->count(20)->for($restaurant)->create();
        
        // Create reviews
        Review::factory()->count(30)->for($restaurant)->create();
    }
}
