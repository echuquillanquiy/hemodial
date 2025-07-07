<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // Para generar strings aleatorios si es necesario
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('es_ES'); // Usar Faker en español para DNI, etc.

        // Definir las opciones para los campos ENUM
        $accesoVenosoOpciones = ['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'];
        $accesoArterialOpciones = ['CVC-LP', 'CVCT', 'FAV', 'VP', 'INJERTO'];
        $estadoOpciones = ['ACTIVO', 'INACTIVO'];
        $serologiaOpciones = ['SEROLOGICO', 'NO SEROLOGICO'];
        $frecuenciaOpciones = ['L-M-V', 'M-J-S'];

        return [
            'name' => $faker->name,
            'dni' => $faker->unique()->dni, // Genera un DNI único
            'n_historia' => 'H' . $faker->unique()->randomNumber(5, true), // Número de historia único, true para no empezar con 0
            'autogenerado' => 'AUTO' . $faker->unique()->randomNumber(4, true), // Autogenerado único
            'n_sesion' => $faker->optional(0.7)->randomNumber(2, true), // 70% de probabilidad de tener un número de sesión
            'acceso_venoso' => $faker->randomElement($accesoVenosoOpciones),
            'acceso_arterial' => $faker->randomElement($accesoArterialOpciones),
            'estado' => $faker->randomElement($estadoOpciones),
            'serologia' => $faker->randomElement($serologiaOpciones),
            'peso_seco' => $faker->optional(0.8)->randomFloat(2, 40, 100), // 80% de probabilidad de tener peso seco (entre 40 y 100 con 2 decimales)
            'frecuencia' => $faker->randomElement($frecuenciaOpciones),
            // Para shift_id, generamos un número aleatorio entre 1 y 4.
            // Asegúrate de que existan shifts con estos IDs en tu tabla 'shifts'.
            'shift_id' => $faker->numberBetween(1, 4),
        ];
    }
}
