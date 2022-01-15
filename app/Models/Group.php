<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Group extends Model
{
    protected $guarded = [];
    public $timestamps=false;

    public function getSlugAttribute($slug)
    {
        return config('constants.url.group') . $slug;
    }

    public function getSlugContentAttribute()
    {
        return Str::slug($this->name);
    }
}
