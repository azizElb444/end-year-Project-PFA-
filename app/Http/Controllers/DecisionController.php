<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Models\Decision;

class DecisionController extends Controller
{
    public function valide(Request $request) {
        $id=$request->id;
        $etudiant=etudiant::find($id);
        $nom=$etudiant->nom;
        $prenom=$etudiant->prenom;
        $etudiantcheck=Decision::where('nom',$nom)->where('prenom',$prenom)->first();
        if ($etudiantcheck) {
            if ($etudiantcheck->decision=='validé') {
                $div=1;
            }
            if ($etudiantcheck->decision=='ajournée') {
                $div=0;
            }
        }
        else {
            Decision::create([
                'nom'=>$nom,
                'prenom'=>$prenom,
                'decision'=>'validé'
            ]);
            $div=2;
        }

        
        return view('valide',compact('div','id'));
    }
    public function ajourne(Request $request) {
        $id=$request->id;
        $etudiant=etudiant::find($id);
        $nom=$etudiant->nom;
        $prenom=$etudiant->prenom;
        $etudiantcheck=Decision::where('nom',$nom)->where('prenom',$prenom)->first();
        if ($etudiantcheck) {
            if ($etudiantcheck->decision=='validé') {
                $div=1;
            }
            if ($etudiantcheck->decision=='ajournée') {
                $div=0;
            }
        }
        else {
            Decision::create([
                'nom'=>$nom,
                'prenom'=>$prenom,
                'decision'=>'ajournée'
            ]);
            $div=2;
        }

        
        return view('ajourne',compact('div','id'));
    }

    //
}
