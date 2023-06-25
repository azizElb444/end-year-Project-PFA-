<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niveaux')->insert([
            'nom' => '1er-année',
            
        ]);
        DB::table('niveaux')->insert([
            'nom' => '2eme-année',
            
        ]);
        DB::table('niveaux')->insert([
            'nom' => '3eme-année',
            
        ]);
    }
}
