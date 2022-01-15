<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Group;
use Illuminate\Support\Str;

$factory->define(Group::class, function (Faker $faker) {
    $group = $faker->name;
    return [
        'name' => $group,
        'slug' => Str::slug($group)
    ];
});
