<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\EstimationRequestDetail;
use Faker\Generator as Faker;

$factory->define(EstimationRequestDetail::class, function (Faker $faker) {
    return [
        'catalog_id' => $faker->numberBetween($min = 1, $max = 500),
        'catalog_name' => $faker->word,
        'product_id' => $faker->numberBetween($min = 1, $max = 1000),
        'product_name' => $faker->word,
	'product_quantity' => $faker->numberBetween($min = 1, $max = 100),
	'create_user_id' => $faker->ean8,
        'update_user_id' => $faker->ean8,
    ];
});
