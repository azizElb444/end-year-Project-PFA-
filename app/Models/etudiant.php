<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant_examen;
use App\Models\Examen;
use App\Models\Filiere;


class etudiant extends Model
{
    use HasFactory;
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function examens()
    {
        return $this->belongsToMany(Examen::class, 'etudiant_examens')->withPivot('note');
    }
}
