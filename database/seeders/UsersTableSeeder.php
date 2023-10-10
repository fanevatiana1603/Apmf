<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('fanevatiana'),
            'photo'=>'A',
        ]);

        $auteur = User::create([
            'name'=>'auteur',
            'email'=>'auteur@auteur.com',
            'password'=> Hash::make('fanevatiana'),
            'photo'=>'B',
        ]);

        $utilisateur = User::create([
            'name'=>'utilisateur',
            'email'=>'utilisateur@utilisateur.com',
            'password'=> Hash::make('fanevatiana'),
            'photo'=>'C',
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $auteurRole = Role::where('name', 'auteur')->first();
        $utilisateurRole = Role::where('name', 'utilisateur')->first();

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);
    }
}
