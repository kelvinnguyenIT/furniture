<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $sentence = $faker->sentence;
    return [
        'title' => $sentence,
        'author' => $faker->name,
        'image' => 'https://picsum.photos/' . 1600 . '/' . 800,
        'date' => now(),
        'slug' => Str::slug($sentence),
        'content' => $faker->paragraph(rand(50, 100)) . '<br/><img src="https://picsum.photos/' . rand(500, 1000) . '/' . rand(500, 1000) . '"><br/>' . $faker->paragraph(rand(50, 100))
    ];
});
