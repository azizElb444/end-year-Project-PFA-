<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilierenvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=36;$i<=45;$i++) {
            DB::table('filiere_niveaus')->insert([
            'filiere_id' => '3',
            'niveau_id' => '1' ,
            'etudiant_id' => $i ,
            
        ]);
        }
        
    }
}
