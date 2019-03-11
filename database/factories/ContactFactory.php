<?php

use Faker\Generator as Faker;

$factory->define(App\Contactus::class, function (Faker $faker) {
    return [
        'contact_name' => $faker->name,
        'contact_tel' => $faker->phoneNumber,
        'contact_email' => $faker->email,
        'contact_refsite' => $faker->url,
        'contact_content' => $faker->text,
    ];
});
