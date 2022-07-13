<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RepresentanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => '0955546601',
            'nombre' => 'john jairo',
            'apellido' => 'Romero Sanchez',
            'telefono' => null,
            'fecha_nacimiento' => null,
            'telefono' => null,
            'direccion' => null,
        ];
    }
}
