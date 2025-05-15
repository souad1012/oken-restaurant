<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'OKEN Restaurant',
            'description' => 'Inspired traditions and infused with the vibrant flavors of Japan, OKEN was founded with a passion for creating memorable dining experiences. Our chefs combine the finest local ingredients with exceptional culinary techniques to craft dishes that are as beautiful to behold as they are to taste.',
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => 'info@oken-restaurant.com',
            'opening_hours' => '11:00 - 23:00',
            'image' => 'restaurant.jpg',
        ];
    }
}
