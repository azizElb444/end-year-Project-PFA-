<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '1',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '1',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '2',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '2',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '3',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '3',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '4',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '4',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '5',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '5',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '6',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '6',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '7',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '7',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 1',
            'module_id' => '6',
            'coefficient' => '1',
            
        ]);
        DB::table('matieres')->insert([
            'nom' => 'matiere 2',
            'module_id' => '8',
            'coefficient' => '8',
            
        ]);

    }
}
