<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin User', // Nome do usuário
            'email' => 'admin@example.com', // Email do usuário
            'password' => Hash::make('senha123'), // Senha do usuário (criptografada)
        ]);
    }
}
