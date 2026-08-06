<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([

        [
            'name'=>'Technology',
            'slug'=>'technology'
        ],

        [
            'name'=>'Travel',
            'slug'=>'travel'
        ],

        [
            'name'=>'Lifestyle',
            'slug'=>'lifestyle'
        ],

        [
            'name'=>'Education',
            'slug'=>'education'
        ]

    ]);
}
}
