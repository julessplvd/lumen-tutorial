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

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email        
    ];
});

$factory->define(App\Roles::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->jobTitle     
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->streetName,
        'author_id' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
