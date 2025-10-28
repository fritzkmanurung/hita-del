<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    public function run()
    {
        $studyPrograms = [
            // Fakultas Informatika dan Teknik Elektro
            ['faculty_id' => 1, 'name' => 'Informatika'],
            ['faculty_id' => 1, 'name' => 'Sistem Informasi'],
            ['faculty_id' => 1, 'name' => 'Teknik Elektro'],
            ['faculty_id' => 1, 'name' => 'Teknik Komputer'],
            
            // Fakultas Bioteknologi
            ['faculty_id' => 2, 'name' => 'Bioteknologi'],
            
            // Fakultas Vokasi
            ['faculty_id' => 3, 'name' => 'Teknologi Rekayasa Perangkat Lunak'],
            ['faculty_id' => 3, 'name' => 'Teknologi Rekayasa Internet'],
            ['faculty_id' => 3, 'name' => 'Teknologi Rekayasa Komputer'],
            
            // Fakultas Teknologi Industri
            ['faculty_id' => 4, 'name' => 'S1 Manajemen Rekayasa'],
            ['faculty_id' => 4, 'name' => 'S1 Teknik Metalurgi'],
        ];

        foreach ($studyPrograms as $studyProgram) {
            StudyProgram::create($studyProgram);
        }
    }
}