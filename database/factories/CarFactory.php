<?php
use Faker\Generator as Faker;
$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['honda', 'toyota', 'ford']),
        'model' => $faker->randomElement(['car1', 'car2', 'car3']),
        'year' => $faker->year,
    ];
});