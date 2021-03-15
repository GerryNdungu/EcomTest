<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sku' => $faker->uuid,
        'prod_title' => $faker->randomElement(['Electronics', 'Clothes','Health & Beauty','Gaming','Food']),
        'prod_cat_id' => $faker->randomDigit ,
        'cat_id' => $faker->randomDigit ,
        'prod_img' => $faker->imageUrl($width =640, $height=480, 'phones'),
       'prod_price' => $faker->numberBetween($min = 500, $max = 900),
        'prod_desc' => $faker->text,
        
    ];
});
