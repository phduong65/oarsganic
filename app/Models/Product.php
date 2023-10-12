<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $fillable = ['name', 'price', 'photo', 'description', 'status', 'quality'];
    public function scopeOrderByPrice($query, $direction = 'asc')
    {
        return $query->orderBy('price', $direction);
    }
}
