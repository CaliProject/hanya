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
//$factory->define(Hanya\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});

/**
 * 香道文化的数据填充的工厂
 */
$factory->define(Hanya\Culture::class, function(Faker\Generator $faker) {
    return [
        'title'  => $faker->sentence,
        'body'   => $faker->paragraph,
        'author' => '佚名',
        'source' => '本站整理',
    ];
});

/**
 * 课程通知的数据填充的工厂
 */
$factory->define(Hanya\Course::class, function(Faker\Generator $faker) {
    return  [
        'title'  => $faker->sentence,
        'body'   => $faker->paragraph,
        'author' => '佚名',
        'source' => '本站整理'
    ];
});

/**
 * 培训动态的数据填充的工厂
 */
$factory->define(Hanya\Train::class, function(Faker\Generator $faker) {
    return [
        'title'  => $faker->sentence,
        'body'   => $faker->paragraph,
        'author' => '佚名',
        'source' => '本站整理',
    ];
});

/**
 * 师资力量的数据填充的工厂
 */
$factory->define(Hanya\Teacher::class, function(Faker\Generator $faker) {
    return [
        'name'    => $faker->name,
        'image'   => $faker->imageUrl(),
        'body'    => $faker->paragraph,
        'is_good' => false,
    ];
});


