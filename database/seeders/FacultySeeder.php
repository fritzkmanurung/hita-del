<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    public function run()
    {
        $faculties = [
            ['name' => 'Fakultas Informatika dan Teknik Elektro'],
            ['name' => 'Fakultas Bioteknologi'],
            ['name' => 'Fakultas Vokasi'],
            ['name' => 'Fakultas Teknologi Industri'],
        ];

        foreach ($faculties as $faculty) {
            Faculty::create($faculty);
        }
    }
}