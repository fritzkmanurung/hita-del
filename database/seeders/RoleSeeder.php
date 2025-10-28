<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'ppkha'],
            ['name' => 'mahasiswa'],
            ['name' => 'dosen'],
            ['name' => 'lulusan'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}