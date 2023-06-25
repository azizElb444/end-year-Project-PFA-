<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class EtudiantexamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($j=36;$j<=45;$j++) {
            for($i=1;$i<=16;$i++) {
                DB::table('etudiant_examens')->insert([
                'note' => $faker->numberBetween(3,17),
                'examen_id' => $i ,
                'etudiant_id' => $j ,
            
        ]);
        }
    }
        //
    }
}
