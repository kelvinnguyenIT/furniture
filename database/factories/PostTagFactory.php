<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\PostTag;

$factory->define(PostTag::class, function (Faker $faker) {
    return [
        'post_id'=>rand(1,10),
        'tag_id'=>rand(1,5),
    ];
});
