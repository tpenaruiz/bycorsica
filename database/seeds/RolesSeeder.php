<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'libelle' => 'Users',
                'description' => 'Utilisateurs'
            ],
            [
                'libelle' => 'Admin',
                'description' => 'Administrateurs'
            ]
        ];

        DB::table('roles')->delete();
        DB::table('roles')->truncate();
        foreach($roles as $row){
            \App\Roles::create($row);
        }
    }
}
