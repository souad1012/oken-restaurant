<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'reservation_date',
        'guests',
        'status',
        'user_id',
        'restaurant_id',
        'time',
        'email',
        'name',
        'phone',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'reservation_date' => 'date',
        'status' => 'string',
    ];

    /**
     * Get the user that owns the reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the restaurant that owns the reservation.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
