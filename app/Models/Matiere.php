<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Examen;
use App\Models\Module;

class Matiere extends Model
{
    use HasFactory;
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function examens()
    {
        return $this->hasMany(Examen::class, 'matiere_id');
    }
}
