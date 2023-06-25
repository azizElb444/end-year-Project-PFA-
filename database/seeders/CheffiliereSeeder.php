<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class CheffiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
         DB::table('Chef_filieres')->insert([
            'nom' => 'khaled',
            'prenom' => 'mohamed',
            'code_inscription' => $faker->randomNumber(3),
            'filiere_id' => '1',
            
        ]);
        //
    }
}
