<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'redirect_to' => '/admin'],
            ['name' => 'dosen', 'redirect_to' => '/dosen'],
            ['name' => 'mahasiswa', 'redirect_to' => '/mahasiswa'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
