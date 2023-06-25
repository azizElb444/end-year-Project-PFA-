<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class EtudiantseanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1;$i<=15;$i++) {
            for($j=1;$j<=80;$j++) {
                DB::table('etudiantseances')->insert([
                'absence' => $faker->numberBetween(0,1),
                'etudiant_id' => $i,
                'seance_id' => $j,
            
        ]);

            }
        }
        //
    }
}
