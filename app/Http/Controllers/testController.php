<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class testController extends Controller
{   public function index() {
        $etudiants= etudiant::paginate(15);
        return view('test',compact('etudiants'));
}
    public function show(Request $req) {
        $id=$req->id;
        $etudiant= etudiant::find($id);
        return view('etudiantshow',compact('etudiant'));
    }
    
}
