<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Person::class, function (Faker\Generator $faker) {
    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->safeEmail,
    //     'password' => bcrypt(str_random(10)),
    //     'remember_token' => str_random(10),
    // ];

    return [
    	'first_name' => $faker->sentence(mt_rand(3, 5)),
    	'last_name' => $faker->sentence(mt_rand(3,5)),
    	'address' => $faker->sentence(mt_rand(3,5)),
        'phone' => $faker->sentence(mt_rand(3,5)),
        'mobile' => $faker->sentence(mt_rand(3,5))
    ];
});
