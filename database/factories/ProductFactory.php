<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id'=>\App\Models\Category::all()->random()->id,
        'title'=>$faker->jobTitle,
        'description'=>$faker->realText(),
        'image'=>$faker->imageUrl(),
        'price'=>random_int(95, 500)
    ];
});
