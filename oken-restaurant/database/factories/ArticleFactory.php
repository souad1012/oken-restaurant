<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['main', 'starter', 'dessert'];
        $category = fake()->randomElement($categories);
        
        $mainDishes = [
            'Grilled Salmon with Dill Sauce' => ['price' => 40, 'description' => 'Certified sustainable wild-caught', 'image' => 'salmon.jpg'],
            'Roast Beef with Vegetable' => ['price' => 20, 'description' => 'Certified sustainable wild-caught', 'image' => 'beef.jpg'],
            'Maryleigh Vegetarian Curry' => ['price' => 25, 'description' => 'Certified sustainable wild-caught', 'image' => 'curry.jpg'],
            'Spicy Vegan Potato Curry' => ['price' => 30, 'description' => 'Certified sustainable wild-caught', 'image' => 'vegan.jpg'],
            'Truffle Mushroom Risotto' => ['price' => 35, 'description' => 'Creamy risotto with truffle and wild mushrooms', 'image' => 'risotto.jpg'],
            'Herb-Crusted Lamb Chops' => ['price' => 45, 'description' => 'Tender lamb chops with herb crust', 'image' => 'lamb.jpg'],
            'Pan-Seared Sea Bass' => ['price' => 38, 'description' => 'Fresh sea bass with lemon butter sauce', 'image' => 'seabass.jpg'],
            'Wild Mushroom and Herb-Stuffed Chicken' => ['price' => 32, 'description' => 'Juicy chicken breast with mushroom filling', 'image' => 'chicken.jpg'],
            'Lobster Ravioli' => ['price' => 42, 'description' => 'Handmade ravioli with lobster filling', 'image' => 'ravioli.jpg'],
        ];
        
        $starters = [
            'Raw Scallops from Erquy' => ['price' => 40, 'description' => 'Certified sustainable wild-caught', 'image' => 'scallops.jpg'],
            'Spring Roll' => ['price' => 20, 'description' => 'Certified sustainable wild-caught', 'image' => 'springroll.jpg'],
            'French Onion Soup' => ['price' => 25, 'description' => 'Certified sustainable wild-caught', 'image' => 'onionsoup.jpg'],
            'Tomato Bruschetta' => ['price' => 30, 'description' => 'Certified sustainable wild-caught', 'image' => 'bruschetta.jpg'],
        ];
        
        $desserts = [
            'Apple Pie with Cream' => ['price' => 40, 'description' => 'Certified sustainable wild-caught', 'image' => 'applepie.jpg'],
            'Lemon Meringue Pie' => ['price' => 20, 'description' => 'Certified sustainable wild-caught', 'image' => 'lemonpie.jpg'],
            'Flourless Chocolate Torte' => ['price' => 25, 'description' => 'Rich chocolate torte with berries', 'image' => 'torte.jpg'],
        ];
        
        $dishes = [
            'main' => $mainDishes,
            'starter' => $starters,
            'dessert' => $desserts,
        ];
        
        $dishNames = array_keys($dishes[$category]);
        $dishName = fake()->randomElement($dishNames);
        $dish = $dishes[$category][$dishName];
        
        return [
            'name' => $dishName,
            'description' => $dish['description'],
            'price' => $dish['price'],
            'restaurant_id' => Restaurant::factory(),
            'category' => $category,
            'image' => $dish['image'],
            'is_featured' => fake()->boolean(20),
        ];
    }
    
    public function main()
    {
        return $this->state(function (array $attributes) {
            return [
                'category' => 'main',
            ];
        });
    }
    
    public function starter()
    {
        return $this->state(function (array $attributes) {
            return [
                'category' => 'starter',
            ];
        });
    }
    
    public function dessert()
    {
        return $this->state(function (array $attributes) {
            return [
                'category' => 'dessert',
            ];
        });
    }
    
    public function featured()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_featured' => true,
            ];
        });
    }
}
