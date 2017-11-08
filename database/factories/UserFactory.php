<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


#新闻
$factory->define(App\Models\Post::class, function (Faker $faker) {

    $images = array(
      'news1.jpg',
      'news2.jpg'
    );
    $new_images = array();
    $new_filename = md5(rand(0,999).rand(0,10000).time());
    Storage::copy($images[mt_rand(0, 1)], '/public/upload/posts/image/'.$new_filename.'.jpg');
    $new_images = 'upload/posts/image/'.$new_filename.'.jpg';
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->sentence(mt_rand(3, 10)),
        'cover' => $new_images,
        'slug' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});
