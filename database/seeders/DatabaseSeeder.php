<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            FacultySeeder::class,
            StudyProgramSeeder::class,
            UserSeeder::class,
        ]);
    }
}