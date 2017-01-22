<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id_role' => '1',
                'id_ville' => '1',
                'nom' => 'Bekkouche',
                'email' => 'bilel.bekkouche@gmail.com',
                'prenom' => 'Bilel',
                'date_naissance' => NULL,
                'password' => \Hash::make('password'.\Config::get('constante.salt')),
                'status' => 'Actif'
            ],
            [
                'id_role' => '2',
                'id_ville' => '1',
                'nom' => 'Penaruiz',
                'email' => 'thomas.penaruiz@hotmail.fr',
                'prenom' => 'Thomas',
                'date_naissance' => NULL,
                'password' => \Hash::make('password'.\Config::get('constante.salt')),
                'status' => 'Actif'
            ],
            [
                'id_role' => '1',
                'id_ville' => '1',
                'nom' => 'users',
                'email' => 'users@users.fr',
                'prenom' => 'users',
                'date_naissance' => '1998-12-25',
                'password' => \Hash::make('password'.\Config::get('constante.salt')),
                'status' => 'Actif'
            ],

        ];
        DB::table('users')->delete();
        DB::table('users')->truncate();
        foreach($users as $row){
            \App\Users::create($row);
        }
    }
}
