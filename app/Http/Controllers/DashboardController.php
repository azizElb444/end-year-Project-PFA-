<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Models\Examen;
use App\Models\Semester;
use App\Models\Module;
use App\Models\Matiere;
use App\Models\Seance;
use App\Models\Etudiant_examen;

class DashboardController extends Controller
{
    public function show(Request $request) {
        $id=$request->id;
        $etudiant=etudiant::find($id);
        $etudiantId=$id;
        $student = etudiant::with('examens.matiere.module')->find($etudiantId);
        $etudiantExamens = Etudiant_examen::find(1);
        $tableData = [];
        $i=0;
        $noteModule=0;
        $j=0;
        foreach ($student->examens as $examen) {
            $module = $examen->matiere->module;
            $examenId = $examen->id;

            $note = Etudiant_examen::where('examen_id', $examenId)
                      ->where('etudiant_id', $etudiantId)
                      ->value('note');
            $j++;
            if ($i<2) {
                $noteModule=+$note;
                $i++;
            }
            if ($i==2) {
                $noteModule=$noteModule/2;
                $tableData[] = [
                    'module' => $module->nom,
                    'note' => $noteModule,
                ];
                $i=0;
                $noteModule=0;
            }
            
        }
        $tableData;
        
        return view('dashboard',compact('etudiant','tableData'));
    }
    //
}
