<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Corrige el namespace a App\Models\User
use Illuminate\Support\Facades\Hash; // Importa Hash
use Illuminate\Support\Str; // Importa Str

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
                'name' => 'Eduardo Chuquillanqui',
                'username' => 'echuquillanqui',
                'dni' => '46589634', // Un DNI de ejemplo
                'email' => 'echuquillanquiy@gmail.com',
                'rol' => 'Superadmin', // Rol del usuario
                'email_verified_at' => now(), // Se establece la fecha de verificación
                'password' => Hash::make('password'), // Contraseña hasheada
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        User::create([
                'name' => 'Medico Nefrologo',
                'username' => 'nefrologo',
                'dni' => '00000001', // Un DNI de ejemplo
                'email' => 'nefro@gmail.com',
                'colegiatura' => '12345', // Un número de colegiatura de ejemplo
                'rne' => '54321', // Un número de RNE de ejemplo  
                'rol' => 'Medico', // Rol del usuario
                'email_verified_at' => now(), // Se establece la fecha de verificación
                'password' => Hash::make('password'), // Contraseña hasheada
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        User::create([
                'name' => 'Enfermero Asistencial',
                'username' => 'enfermero',
                'dni' => '0000002', // Un DNI de ejemplo
                'email' => 'nurse@gmail.com',
                'rol' => 'Enfermero', // Rol del usuario
                'colegiatura' => '23456', // Un número de colegiatura de ejemplo
                'rne' => '65432', // Un número de RNE de ejemplo  
                'email_verified_at' => now(), // Se establece la fecha de verificación
                'password' => Hash::make('password'), // Contraseña hasheada
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        User::create([
                'name' => 'Administrador General',
                'username' => 'administrador',
                'dni' => '0000003', // Un DNI de ejemplo
                'email' => 'adm@gmail.com',
                'rol' => 'Administrador', // Rol del usuario
                'email_verified_at' => now(), // Se establece la fecha de verificación
                'password' => Hash::make('password'), // Contraseña hasheada
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}