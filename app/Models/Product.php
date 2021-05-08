<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'productos';
    protected $fillable = ['name', 'sku', 'price'];
    // protected $guarded = ['stock'];

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::addGlobalScope('inStock', function ($query) {
    //         return $query->where('stock', '>', 0);
    //     });
    // }

    public function scopeOutOfStock($query)
    {
        return $query->where('stock', 0);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
