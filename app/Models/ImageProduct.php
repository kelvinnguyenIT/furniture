<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table='image_products';
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
