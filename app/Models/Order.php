<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'customer_name',
        'status',
        'phone',
        'location_id',
        'product_id',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
