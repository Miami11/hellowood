<?php

use App\Member;
use App\Movie;
use Faker\Generator as Faker;

$factory->define(App\Rank::class, function (Faker $faker) {
    return [
        'member_id'=> Member::all()->random()->id,
        'movie_id'=> Movie::all()->random()->id,
        'stars' => $faker->numberBetween(1,5),
    ];
});
