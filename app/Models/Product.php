<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function imageProduct()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getLimitDescriptionAttribute()
    {
        return Str::limit(strip_tags(html_entity_decode($this->description)));
    }

    public function getVndAttribute()
    {
        $symbol = 'đ';
        $priceFormat = number_format($this->price, 0, '', '.');
        return $priceFormat.$symbol;
    }

    public function getVndDiscountAttribute()
    {
        $symbol = 'đ';
        $priceFormat = number_format($this->discount_price, 0, '', '.');
        return $priceFormat.$symbol;
    }

    public function getSlugAttribute($slug)
    {
        return config('constants.url.product') . $slug;
    }
}
