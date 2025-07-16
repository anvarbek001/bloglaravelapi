<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    $photoFiles = [
        "images/products/beauty.jpg",
        "images/products/camera.jpg",
        "images/products/chanel.jpg",
        "images/products/clean.jpg",
        "images/products/kozoynak.jpg",
        "images/products/quloqchin.jpg",
        "images/products/shoes.jpg",
        "images/products/soat.jpg",
        "images/products/termos.jpg",
        "images/products/watch.jpg",
    ];

    return [
        'category_id' => Category::inRandomOrder()->first()->id ?? factory(Category::class),
        'name' => $faker->words(2, true),
        'rating' => $faker->numberBetween(1, 5),
        'price' => $faker->numberBetween(10000, 1000000),
        'content' => $faker->word(),
        'description' => $faker->paragraph(2),
        'photo' => $faker->randomElement($photoFiles),
    ];
});
