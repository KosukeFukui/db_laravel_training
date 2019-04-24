<?php

//use App\User;
use App\EstimationRequest;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/*
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
 */
$factory->define(EstimationRequest::class, function (Faker $faker) {
    return [
        'estimation_request_date' => $faker->dateTime->format('Y-m-d'),
        'estimation_request_maker_name' => $faker->name,
        'partner_id' => $faker->numberBetween($min = 1, $max = 500),
        'partner_name' => $faker->company,
        'partner_incharge_name' => $faker->name,
	'desirable_answer_date' => $faker->dateTime->format('Y-m-d'),
	'create_user_id' => $faker->ean8,
	'update_user_id' => $faker->ean8,
    ];
});
