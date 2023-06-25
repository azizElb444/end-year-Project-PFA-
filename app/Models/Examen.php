<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant_examen;
use App\Models\Matiere;
use App\Models\etudiant;


class Examen extends Model
{
    use HasFactory;
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'matiere_id');
    }

    public function etudiants()
    {
        return $this->belongsToMany(etudiant::class, 'etudiant_examens', 'examen_id', 'etudiant_id');
    }

}
