<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*
|--------------------------------------------------------------------------
| People
|--------------------------------------------------------------------------
*/
$factory->define(App\People::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'position' => 'Research Intern',
        'education' => 'University of British Columbia Okanagan',
        'description' => $faker->paragraph(20),
    ];
});

$factory->defineAs(App\People::class, 'current_student', function (Faker\Generator $faker) use ($factory) {
    $people = $factory->raw(App\People::class);
    return array_merge($people, ['type' => 'current_student']);
});

$factory->defineAs(App\People::class, 'past_student', function (Faker\Generator $faker) use ($factory) {
    $people = $factory->raw(App\People::class);
    return array_merge($people, ['type' => 'past_student']);
});

$factory->defineAs(App\People::class, 'current_staff', function (Faker\Generator $faker) use ($factory) {
    $people = $factory->raw(App\People::class);
    return array_merge($people, ['type' => 'current_staff', 'position' => 'Medical Physicist']);
});

$factory->defineAs(App\People::class, 'past_staff', function (Faker\Generator $faker) use ($factory) {
    $people = $factory->raw(App\People::class);
    return array_merge($people, ['type' => 'past_staff', 'position' => 'Medical Physicist']);
});

$factory->defineAs(App\People::class, 'partner', function (Faker\Generator $faker) use ($factory) {
    $people = $factory->raw(App\People::class);
    return array_merge($people, ['type' => 'partner', 'position' => null, 'education' => null, 'description' => null]);
});

/*
|--------------------------------------------------------------------------
| Project
|--------------------------------------------------------------------------
*/
$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(),
    ];
});