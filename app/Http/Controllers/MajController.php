<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Decision;

class MajController extends Controller
{
    public function show() {
        $etudiants=Decision::paginate(10);
        return view('maj',compact('etudiants'));
    }
    public function edit(Decision $decision) {

        return view('edit',compact('decision'));
    }
    public function update(Request $request,$id)  {
        $decision = Decision::find($id);
        $decision->nom = $request->input('nom');
        $decision->prenom = $request->input('prenom');
        $decision->decision = $request->input('decision');
        $decision->save();
        return redirect()->route('MAJ')->with('success', 'Decision updated successfully!');


    }
    //
}
