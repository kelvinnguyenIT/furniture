<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Brand;
use Illuminate\Support\Str;

$factory->define(Brand::class, function (Faker $faker) {
    $name=$faker->name;
    return [
        'name'=>$name,
        'slug'=>Str::slug($name),
    ];
});
