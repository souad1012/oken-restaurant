<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
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
        'price',
        'restaurant_id',
        'category',
        'image',
        'is_featured',
    ];

    /**
     * Get the restaurant that owns the article.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
