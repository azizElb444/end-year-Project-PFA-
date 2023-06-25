<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semester;

class Niveau extends Model
{
    use HasFactory;
    public function semesters()
    {
        return $this->hasMany(Semester::class, 'niveau_id');
    }
     
}
