<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'auteur']);
        Role::create(['name' => 'utilisateur']);
    }
}