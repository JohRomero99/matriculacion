<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_1 = role::create(['name' => 'admin']);
        $role_2 = role::create(['name' => 'representante']);
        $role_3 = role::create(['name' => 'aspirante_nsc']);

        Permission::create(['name' => 'admin.home'])->assignRole($role_1);

        Permission::create(['name' => 'user.home'])->assignRole($role_2);

        Permission::create(['name' => 'aspirante.home'])->assignRole($role_3);
       
    }
}
