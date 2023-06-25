<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;


class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate and insert a specified number of records
        $recordCount = 10; // Replace with the desired number of records
        for ($i = 0; $i < $recordCount; $i++) {
            DB::table('etudiants')->insert([
                'filiere_id' => '3',
                'nom' => $faker->lastName,
                'prenom' => $faker->name,
                'date_naissance'=>$faker->date,
                'code_a'=>$faker->randomNumber(6),
                'email'=>$faker->email,
                'cin'=>$faker->lexify('??').$faker->randomNumber(5),
                'cna'=>$faker->lexify('?').$faker->randomNumber(8),
                'picture'=>'img.png',
                // Add more columns and their respective Faker methods here
            ]);
        }
        //
    }
}
