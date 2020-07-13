<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    $email = $firstName . '.' . $lastName . '@example.com';
    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'home_phone' => $faker->numerify('###-###-####'),
        'email' => $email
    ];
});
