<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = [];

    public function postTag()
    {
        return $this->hasMany(PostTag::class);
    }

    public function getSlugAttribute($slug)
    {
        return config('constants.url.blog') . $slug;
    }

    public function getLimitContentAttribute()
    {
        return Str::limit(strip_tags(html_entity_decode($this->content)));
    }
}
