<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {    
    return[
        'name' => $faker->text(15),
        'description' => $faker->text(100),
        'release_date' => $faker->integer(4),
        'rating' => $faker->float(3),
        'ticket_price' => $faker->float(3),
        'country' => $faker->text(15),
        'genre' => $faker->text(20),
    ];
});
