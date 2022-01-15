<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'price' => rand(250000,15000000),
        'discount_price' => '0',
        'brand_id'=>rand(1,5),
        'category_id'=>rand(1,5),
        'image'=> 'https://picsum.photos/' . 1600 . '/' . 800,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph(rand(50, 100)) . '<br/><img src="https://picsum.photos/' . rand(500, 1000) . '/' . rand(500, 1000) . '"><br/>' . $faker->paragraph(rand(50, 100))
    ];
});
