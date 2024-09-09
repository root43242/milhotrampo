<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User', // Nome do usuário
            'email' => 'admin@example.com', // Email do usuário
            'password' => Hash::make('senha123'), // Senha do usuário (criptografada)
        ]);
    }
}
