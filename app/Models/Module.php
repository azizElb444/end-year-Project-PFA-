<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Semester;

class Module extends Model
{
    use HasFactory;
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function matieres()
    {
        return $this->hasMany(Matiere::class, 'module_id');
    }
}
