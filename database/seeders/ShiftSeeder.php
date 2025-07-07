<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::create([
            'name' => 'I',
            'start_time' => '05:50',
            'end_time' => '10:00',
            'status' => 'ACTIVO',
            'description' => 'Turno madrugada',
        ]);

        Shift::create([
            'name' => 'II',
            'start_time' => '10:30',
            'end_time' => '14:00',
            'status' => 'ACTIVO',
            'description' => 'Turno mañana',
        ]);

        Shift::create([
            'name' => 'III',
            'start_time' => '14:00',
            'end_time' => '18:30',
            'status' => 'ACTIVO',
            'description' => 'Turno tarde',
        ]);

        Shift::create([
            'name' => 'IV',
            'start_time' => '19:00',
            'end_time' => '23:30',
            'status' => 'ACTIVO',
            'description' => 'Turno noche',
        ]);
    }
}
