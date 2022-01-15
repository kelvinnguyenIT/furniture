<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cms extends Model
{
    protected $fillable = ['key', 'value'];

    public function getLimitValueAttribute()
    {
        return Str::limit($this->value, 200);
    }

    public function getSrcAttribute()
    {
        return $this->value;
    }
}
