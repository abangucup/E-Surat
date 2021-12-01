<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['identitas' => Str::random(5), 'name' => 'PPA Admin', 'role_id' => 1, 'telp' => '08xxxxxx', 'email' => 'admin@admin.ac.id', 'password' => Hash::make('admin')],
            ['identitas' => Str::random(5), 'name' => 'Dosen', 'role_id' => 2, 'telp' => '08xxxxxx', 'email' => 'dosen@dosen.ac.id', 'password' => Hash::make('dosen')],
            ['identitas' => Str::random(5), 'name' => 'Mahasiswa', 'role_id' => 3, 'telp' => '08xxxxxx', 'email' => 'mahasiswa@mahasiswa.ac.id', 'password' => Hash::make('mahasiswa')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
