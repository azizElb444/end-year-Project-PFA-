<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        DB::table('filieres')->insert([
            'nom' => 'SSI',
            
        ]);
        DB::table('filieres')->insert([
            'nom' => 'BI',
            
        ]);
        DB::table('filieres')->insert([
            'nom' => 'GL',
            
        ]);
    }
}
