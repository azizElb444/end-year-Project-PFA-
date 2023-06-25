<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('examens')->insert([
            'nom' => 'examen 1',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '1',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 2',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '2',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 3',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '3',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 4',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '4',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 5',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '5',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 6',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '6',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 7',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '7',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 8',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '8',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 9',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '9',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 10',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '10',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 11',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '11',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 12',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '12',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 13',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '13',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 14',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '14',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 15',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '15',
            
        ]);
        DB::table('examens')->insert([
            'nom' => 'examen 16',
            'picture' => 'pic.jpg',
            'date_exam' => '2023-05-15',
            'matiere_id' => '16',
            
        ]);
    }
}