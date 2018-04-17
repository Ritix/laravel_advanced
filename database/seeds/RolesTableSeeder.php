<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create(['name' => 'Admin']);
        \App\Models\Role::create(['name' => 'Moderator']);
        \App\Models\Role::create(['name' => 'User']);
    }
}
