<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere_niveau;
use App\Models\etudiant;

class DelibererController extends Controller
{
    public function show(Request $request) {
        $filiere_id=$request->input('filiere_id');
        $niveau_id=$request->input('niveau_id');
        $etudiants=Filiere_niveau::where('filiere_id',$filiere_id)->where('niveau_id',$niveau_id)->with('etudiant')->get();



        return view('deliberer',compact('etudiants'));

    }
    //
}
