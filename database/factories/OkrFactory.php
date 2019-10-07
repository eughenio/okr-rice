<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Okr;
use App\Area;
use Faker\Generator as Faker;

$factory->define(Okr::class, function (Faker $faker) {
	$area = Area::find($faker->numberBetween($min = 1, $max = 10));
    
    return [
        'result' => $faker->catchPhrase,
        'objective' => $faker->catchPhrase,
        'quarter_year' => ceil(date("m", time())/3),
        'priority' => $faker->numberBetween($min = 1, $max = 3),
        'progress' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1),
        'duration' => $faker->numberBetween($min = 1, $max = 30),
        'start_date' => $faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now', $timezone = null),
        'reach' => $faker->randomElement($array = array ('100', '200', '400', '800', '1600')),
        'impact' => $faker->randomElement($array = array ('0.25', '0.5', '1', '2', '3')),
        'confidence' => $faker->randomElement($array = array ('20', '50', '70', '80', '100')),
        'effort' => $faker->randomElement($array = array ('1', '2', '5', '10', '15')),
        'area_id' => $area,
    ];
});
