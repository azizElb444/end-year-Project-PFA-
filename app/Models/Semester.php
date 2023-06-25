<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
use App\Models\Niveau;

class Semester extends Model
{
    use HasFactory;
    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'niveau_id');
    }

    public function modules()
    {
        return $this->hasMany(Module::class, 'semester_id');
    }
}
