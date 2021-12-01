<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'identitas' => Str::random('5'),
        //     'name' => 'PPA (Admin)',
        //     'telp' => '08xxxxxx',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
