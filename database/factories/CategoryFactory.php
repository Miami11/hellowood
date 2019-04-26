<?php

use Faker\Generator as Faker;
use App\Category_movie;
use App\Category;

$factory->define(Category_movie::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'movie_id' => factory(App\Movie::class)->create()->id,
    ];
});
