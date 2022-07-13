<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class CodigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'estudiante' => $this->faker->unique()->randomNumber(9),
        //     'representante' => $this->faker->unique()->randomNumber(9),
        //     'codigo' => Str::random(10),
        //     'estado' => $this->faker->randomElement(['Pendiente']),
        // ];
        return [
            'estudiante' => '0955546602',
            'representante' => '0955546601',
            'codigo' => Str::random(10),
            'estado' => $this->faker->randomElement(['Pendiente']),
        ];
    }
}
