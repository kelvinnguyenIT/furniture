<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps=false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getSlugAttribute($slug)
    {
        return config('constants.url.category') . $slug;
    }
}
