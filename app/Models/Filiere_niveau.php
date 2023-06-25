<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\etudiant;

class Filiere_niveau extends Model
{
    use HasFactory;
    public function etudiant()
{
    return $this->belongsTo(etudiant::class, 'etudiant_id');
}
}
