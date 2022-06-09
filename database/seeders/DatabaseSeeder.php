<?php

namespace Database\Seeders;
use App\Models\Codigo;

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
        Codigo::factory(1300)->create();
    }
}
