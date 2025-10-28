<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Faculty;
use App\Models\StudyProgram;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Get roles
        $ppkhaRole = Role::where('name', 'ppkha')->first();
        $mahasiswaRole = Role::where('name', 'mahasiswa')->first();
        $dosenRole = Role::where('name', 'dosen')->first();
        $lulusanRole = Role::where('name', 'lulusan')->first();

        // Get faculty and study program - pastikan nama sesuai dengan seeder
        $fakultasInformatika = Faculty::where('name', 'Fakultas Informatika dan Teknik Elektro')->first();
        $informatika = StudyProgram::where('name', 'Informatika')->first();

        // Debug jika data tidak ditemukan
        if (!$fakultasInformatika) {
            $fakultasInformatika = Faculty::first();
        }
        
        if (!$informatika) {
            $informatika = StudyProgram::first();
        }

        // Pastikan data tersedia
        if (!$ppkhaRole || !$fakultasInformatika || !$informatika) {
            throw new \Exception('Data roles, faculties, atau study programs tidak ditemukan. Pastikan seeder telah dijalankan dengan benar.');
        }

        // Create PPKHA User
        $ppkhaUser = User::create([
            'role_id' => $ppkhaRole->id,
            'name' => 'Admin PPKHA',
            'email' => 'ppkha@del.ac.id',
            'password' => Hash::make('password'),
            'status' => 'aktif',
            'activity_status' => 'bekerja',
        ]);

        Profile::create([
            'user_id' => $ppkhaUser->id,
            'faculty_id' => $fakultasInformatika->id,
            'study_program_id' => $informatika->id,
            'nim_or_nip' => 'PPKHA001',
            'tahun_masuk' => 2020,
            'kontak' => '081234567890',
            'alamat' => 'Kampus IT Del',
        ]);

        // Create Mahasiswa User
        $mahasiswaUser = User::create([
            'role_id' => $mahasiswaRole->id,
            'name' => 'Mahasiswa Contoh',
            'email' => 'mahasiswa@del.ac.id',
            'password' => Hash::make('password'),
            'status' => 'aktif',
            'activity_status' => 'none',
        ]);

        Profile::create([
            'user_id' => $mahasiswaUser->id,
            'faculty_id' => $fakultasInformatika->id,
            'study_program_id' => $informatika->id,
            'nim_or_nip' => '112210001',
            'tahun_masuk' => 2022,
            'kontak' => '081234567891',
            'alamat' => 'Asrama IT Del',
        ]);

        // Create Dosen User
        $dosenUser = User::create([
            'role_id' => $dosenRole->id,
            'name' => 'Dosen Contoh',
            'email' => 'dosen@del.ac.id',
            'password' => Hash::make('password'),
            'status' => 'aktif',
            'activity_status' => 'bekerja',
        ]);

        Profile::create([
            'user_id' => $dosenUser->id,
            'faculty_id' => $fakultasInformatika->id,
            'study_program_id' => $informatika->id,
            'nim_or_nip' => 'DOSEN001',
            'tahun_masuk' => 2018,
            'kontak' => '081234567892',
            'alamat' => 'Perumahan Dosen IT Del',
        ]);

        // Create Lulusan User
        $lulusanUser = User::create([
            'role_id' => $lulusanRole->id,
            'name' => 'Alumni Contoh',
            'email' => 'alumni@del.ac.id',
            'password' => Hash::make('password'),
            'status' => 'aktif',
            'activity_status' => 'bekerja',
        ]);

        Profile::create([
            'user_id' => $lulusanUser->id,
            'faculty_id' => $fakultasInformatika->id,
            'study_program_id' => $informatika->id,
            'nim_or_nip' => '112200001',
            'tahun_masuk' => 2018,
            'tahun_lulus' => 2022,
            'kontak' => '081234567893',
            'alamat' => 'Jakarta',
        ]);

        $this->command->info('User seeder berhasil dijalankan!');
        $this->command->info('PPKHA: ppkha@del.ac.id / password');
        $this->command->info('Mahasiswa: mahasiswa@del.ac.id / password');
        $this->command->info('Dosen: dosen@del.ac.id / password');
        $this->command->info('Lulusan: alumni@del.ac.id / password');
    }
}