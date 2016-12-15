<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $medias = [
                [
                    'type' => 'photo',
                    'libelle' => 'libelle '.$i,
                    'description' => 'description '.$i,
                    'chemin' => 'front/img/tapenade-noire-olives-noires-apero.jpg'
                ]
            ];
        }

        DB::table('medias')->delete();
        DB::table('medias')->truncate();
        foreach($medias as $row){
            \App\Medias::create($row);
        }
    }
}
