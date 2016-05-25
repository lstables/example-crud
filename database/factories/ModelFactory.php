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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cars::class, function(Faker\Generator $faker) {
   $numbers = [1,0];

    return [
       'type' => $faker->word,
       'car_name' => $faker->word,
       'model' => $faker->word,
       'make' => $faker->word,
       'active' => shuffle($numbers),
   ];
});
