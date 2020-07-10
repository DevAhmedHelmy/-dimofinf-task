<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' =>$faker->name ,
        'email' =>$faker->unique()->safeEmail ,
        'logo' => $faker->imageUrl($width = 100, $height = 100) ,
        'website_url' => $faker->url,
    ];
});
