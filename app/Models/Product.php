<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
