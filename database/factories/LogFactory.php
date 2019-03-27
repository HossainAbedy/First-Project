<?php

use Faker\Generator as Faker;

$factory->define(App\Log::class, function (Faker $faker) {
    return [
        'lead_this_month' => $faker->numberBetween($min = 10, $max = 100),
        'lead_till_this_month' => $faker->numberBetween($min = 10, $max = 100),
        'new_lead_this_month' => $faker->numberBetween($min = 10, $max = 100),
        'new_lead_till_this_month' => $faker->numberBetween($min = 10, $max = 100),
        'order' => $faker->numberBetween($min = 0, $max = 10),
        'employee_id' => $faker->numberBetween($min = 0, $max = 10),
        'month' => $faker->date
    ];
});
