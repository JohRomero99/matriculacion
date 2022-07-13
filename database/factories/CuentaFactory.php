<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estudiante' => $this->faker->unique()->randomNumber(9),
            'representante' => $this->faker->unique()->randomNumber(9),
            's_matricula' => "40.00",
            's_seguro' => "50.00",
            's_ambiente_virtual' => "30.00",
            's_p1' => "109.00",
            's_p2' => "109.00",
            's_p3' => "109.00",
            's_p4' => "109.00",
            's_p5' => "109.00",
            's_p6' => "109.00",
            's_p7' => "109.00",
            's_p8' => "109.00",
            's_p9' =>"109.00",
            's_p10' => "109.00",
            'estado' => $this->faker->randomElement(['Aprobado','Pendiente']),
        ];
    }
}
