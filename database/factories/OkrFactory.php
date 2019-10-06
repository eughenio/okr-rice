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
        'priority' => $faker->randomDigitNotNull,
        'percentage' => $faker->randomDigitNotNull,
        'area_id' => $area,
    ];
});
