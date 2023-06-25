<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class DecisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('decisions')->insert([
            'nom' => $faker->name,
            'prenom'=>$faker->lastName ,
            'decision' => 'Validé',
            
        ]);
        DB::table('decisions')->insert([
            'nom' => $faker->name,
            'prenom'=>$faker->lastName ,
            'decision' => 'ajourné',
            
        ]);
        DB::table('decisions')->insert([
            'nom' => $faker->name,
            'prenom'=>$faker->lastName ,
            'decision' => 'Validé',
            
        ]);
        DB::table('decisions')->insert([
            'nom' => $faker->name,
            'prenom'=>$faker->lastName ,
            'decision' => 'Validé',
            
        ]);
        //
    }
}
