<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class TypeUtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Role::create([
            "name" => "Acheteur",
        ]);

        Role::create([
            "name" => "Producteur",
        ]);

        Role::create([
            "name" => "AgroEntreprise",
        ]);



    }
}
