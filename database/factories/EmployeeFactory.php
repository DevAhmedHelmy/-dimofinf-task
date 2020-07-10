<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $total_companies = Company::count();
    return [
        'first_name' =>$faker->name ,
        'last_name' =>$faker->name ,
        'email' =>$faker->unique()->safeEmail ,
        'phone' => $faker->phoneNumber ,
        'company_id' => rand(1,$total_companies),
    ];
});
