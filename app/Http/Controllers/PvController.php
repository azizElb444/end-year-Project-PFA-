<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Models\Decision;

class PvController extends Controller
{
    public function show(Request $request) {
        $id=$request->id;
        $etudiant=etudiant::find($id);
        $nom=$etudiant->nom;
        $prenom=$etudiant->prenom;
        $studentdicision=Decision::where('nom',$nom)->where('prenom',$prenom)->first();
        if ($studentdicision) {
            $decision=$studentdicision->decision;
        }
        else {
            $decision='décision pas encore prise';
        }
        return view('pv',compact('etudiant','decision'));
    }
    //
}
