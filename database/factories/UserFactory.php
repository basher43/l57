<?php

use Faker\Generator as Faker;
use App\Models\User;
$factory->define(User::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'phone_number'=>$faker->phoneNumber,
        'password'=>bcrypt('786786786'),
        'email_verification_at'=>\Carbon\Carbon::now()

    ];
});
