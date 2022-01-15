<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];
    public $timestamps=false;

    public function getSlugAttribute($slug)
    {
        return config('constants.url.brand') . $slug;
    }
}
