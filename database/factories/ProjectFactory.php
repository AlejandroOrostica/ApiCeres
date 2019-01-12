<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    $startingDate = $faker->dateTimeBetween('this week', '+6 days');
    $endingDate   = $faker->dateTimeBetween($startingDate, strtotime('+6 days'));


    return [
        'projectName' => $faker->name,
        'projectCost' => rand(0, 1000),
        'projectEmail' => $faker->email,
        'projectStart' => $startingDate,
        'projectEnd' => $endingDate,
        'projectDescription' => $faker->realText(),
        'projectSponsor' => $faker->company
    ];
});
