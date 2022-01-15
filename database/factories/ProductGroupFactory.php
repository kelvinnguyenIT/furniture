<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ProductGroup;

$factory->define(ProductGroup::class, function (Faker $faker) {
    return [
        'product_id'=>rand(1,50),
        'group_id'=>rand(1,5)
    ];
});
