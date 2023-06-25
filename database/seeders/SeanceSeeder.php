<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class SeanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $faker = Faker::create();
        for($j=1;$j<=16;$j++) {
            for($i=1;$i<=4;$i++) {
                DB::table('seances')->insert([
                    'nom' => 'seance',
                    'date' => $faker->date,
                    'duree' => '2' ,
                    'salle' => $faker->lexify('?').$faker->randomNumber(2) ,
                    'matiere_id' => $j,
                
                ]);
            }

        }
        //
    }
}
