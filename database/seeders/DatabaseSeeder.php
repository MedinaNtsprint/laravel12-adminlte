<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Verificar si el usuario vmedina@ntsprint.com ya existe
        if (!\App\Models\User::where('email', 'vmedina@ntsprint.com')->exists()) {
            \App\Models\User::create([
                'name' => 'Victor Medina',
                'email' => 'vmedina@ntsprint.com',
                'password' => bcrypt('admin'),
            ]);
        }
    }
}
