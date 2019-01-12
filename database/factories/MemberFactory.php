<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'memberName' => $faker->firstName,
        'memberLastName' => $faker->lastName,
        'memberDescription' => $faker->text,
        'memberEmail' => $faker->email
    ];
});
