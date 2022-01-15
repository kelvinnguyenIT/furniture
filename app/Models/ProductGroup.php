<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    protected $table='product_groups';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
