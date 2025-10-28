<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Magang'],
            ['name' => 'Lowongan Pekerjaan'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}