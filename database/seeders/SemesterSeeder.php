<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('semesters')->insert([
            'nom' => 'S1',
            'niveau_id' => '1',
            
        ]);
        DB::table('semesters')->insert([
            'nom' => 'S2',
            'niveau_id' => '1',
            
        ]);
        DB::table('semesters')->insert([
            'nom' => 'S3',
            'niveau_id' => '2',
            
        ]);
        DB::table('semesters')->insert([
            'nom' => 'S4',
            'niveau_id' => '2',
            
        ]);
        DB::table('semesters')->insert([
            'nom' => 'S5',
            'niveau_id' => '3',
            
        ]);
        DB::table('semesters')->insert([
            'nom' => 'S6',
            'niveau_id' => '3',
            
        ]);
        
    }
}
