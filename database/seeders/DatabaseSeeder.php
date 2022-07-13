<?php

namespace Database\Seeders;
use App\Models\Codigo;
use App\Models\Cuenta;
use App\Models\Representante;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Codigo::factory(1)->create();
        Representante::factory(1)->create();
        // Cuenta::factory(10)->create();
    }
}
