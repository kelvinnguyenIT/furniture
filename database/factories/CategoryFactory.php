<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Category;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $category = $faker->name;
    return [
        'name' => $category,
        'slug' => Str::slug($category)
    ];
});
