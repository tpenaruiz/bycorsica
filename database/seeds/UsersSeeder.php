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
        for($i=1; $i<=10;$i++){
            $users = [
                [
                    'id_role' => '1',
                    'id_ville' => '1',
                    'nom' => 'users'.$i,
                    'email' => 'users'.$i.'@users.fr',
                    'prenom' => 'users'.$i,
                    'date_naissance' => NULL,
                    'password' => \Hash::make('password'.\Config::get('constante.salt')),
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('users')->delete();
        DB::table('users')->truncate();
        foreach($users as $row){
            \App\Users::create($row);
        }
    }
}
