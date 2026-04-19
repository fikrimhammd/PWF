<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name', 
        'qty',
        'price'
    ];

    // Relasi ke User (Product milik User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Category (Product punya banyak Category)
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}