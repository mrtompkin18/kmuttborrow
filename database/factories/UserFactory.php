<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'user_fname' => $faker->firstNameMale,
        'user_lname' => $faker->lastName,
        'user_email' => $faker->unique()->safeEmail,
        'role_id' => 1,
        'class_id' => 1,
        'user_password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'user_remember_token' => str_random(10),
    ];
});
