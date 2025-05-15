<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reservation_date' => fake()->dateTimeBetween('now', '+30 days'),
            'time' => fake()->randomElement(['18:00', '19:00', '20:00', '21:00']),
            'guests' => fake()->numberBetween(1, 8),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
            'user_id' => User::factory(),
            'restaurant_id' => Restaurant::factory(),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
        ];
    }
    
    public function confirmed()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'confirmed',
            ];
        });
    }
    
    public function pending()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'pending',
            ];
        });
    }
}
