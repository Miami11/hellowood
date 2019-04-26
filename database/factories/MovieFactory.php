<?php

use Faker\Generator as Faker;
use App\Movie;
use App\Country;

$factory->define(Movie::class, function (Faker $faker) {
    $y = 2019;
    $m = rand(2,6);
    $d = rand(1,28);
    return [
        'release_date'=> \Carbon\Carbon::create($y,$m,$d),
        'title' => $faker->title,
        'introduction' => $faker->text,
        'running_time' => $faker->numberBetween(100,180),
        'price' => $faker->numberBetween(150,250),
        'video_link' => 'vrAMRxBB5KI',
        'country_id'=> Country::all()->random()->id,
    ];
});
