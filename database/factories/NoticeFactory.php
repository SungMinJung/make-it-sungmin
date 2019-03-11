<?php

use Faker\Generator as Faker;

$factory->define(App\Notice::class, function (Faker $faker) {
    $user_min = App\User::min('id');
    $user_max = App\User::max('id');
    return [
        'category'=>$faker->randomElement(['notice','qna']),
        'subject' =>  $faker->streetName,
        'content'   => $faker->text,
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'cnt'=> $faker->randomDigitNotNull,
    ];
});
