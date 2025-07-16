<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Electronics',
                'photo' => 'images/categories/electronics.png'
            ],
            [
                'name' => 'Fashion',
                'photo' => 'images/categories/fashion.png'
            ],
            [
                'name' => 'Home & Kitchen',
                'photo' => 'images/categories/home_kitchen.png'
            ],
            [
                'name' => 'Books',
                'photo' => 'images/categories/books.png'
            ],
            [
                'name' => 'Toys',
                'photo' => 'images/categories/toys.png'
            ],
            [
                'name' => 'Sports',
                'photo' => 'images/categories/sports.png'
            ],
            [
                'name' => 'Beauty',
                'photo' => 'images/categories/beauty.png'
            ],
            [
                'name' => 'Automotive',
                'photo' => 'images/categories/automotive.png'
            ],
            [
                'name' => 'Groceries',
                'photo' => 'images/categories/groceries.png'
            ],
            [
                'name' => 'Health',
                'photo' => 'images/categories/health.png'
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'photo' => $category['photo'],
            ]);
        }
    }
}
