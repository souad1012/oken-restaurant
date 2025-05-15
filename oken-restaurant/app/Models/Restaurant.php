<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'opening_hours',
        'image',
    ];

    /**
     * Get the articles for the restaurant.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Get the reservations for the restaurant.
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    /**
     * Get the reviews for the restaurant.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
