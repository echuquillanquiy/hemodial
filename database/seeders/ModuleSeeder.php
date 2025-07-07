<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'name' => 'MODULO 1',
            'descripcion' => 'COLOR',
        ]);

        Module::create([
            'name' => 'MODULO 2',
            'descripcion' => 'COLOR',
        ]);

        Module::create([
            'name' => 'MODULO 3',
            'descripcion' => 'COLOR',
        ]);

        Module::create([
            'name' => 'MODULO 4',
            'descripcion' => 'COLOR',
        ]);

    }
}