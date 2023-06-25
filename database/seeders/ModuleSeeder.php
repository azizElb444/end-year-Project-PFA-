<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            'nom' => 'module 1',
            'semester_id' => '1',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 2',
            'semester_id' => '1',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 3',
            'semester_id' => '1',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 4',
            'semester_id' => '1',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 5',
            'semester_id' => '1',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 1',
            'semester_id' => '2',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 2',
            'semester_id' => '2',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 3',
            'semester_id' => '2',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 4',
            'semester_id' => '2',
            
        ]);
        DB::table('modules')->insert([
            'nom' => 'module 5',
            'semester_id' => '2',
            
        ]);
        
        //
    }
}
