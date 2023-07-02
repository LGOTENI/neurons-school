<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\Option;
use App\Models\Examen;
use App\Models\Niveau;

class ExamenController extends Controller
{
    function index(){

        $matieres= Matiere::all();
        $options= Option::all();
        $examens= Examen::all();
        $niveaux= Niveau::all();

        return view('pages.examen', compact('matieres', 'options', 'examens',));
    }

    function create(Request $request){

        Examen::create(
            [
                'nom'=>$request->nom,
                'description'=>$request->description,
                'annee'=>$request->annee,
                'semestre'=>$request->semestre,
                'option_id' =>$request->option,
                'matiere_id' =>$request->matiere
            ]
        );
        return redirect()->route("examens.index")->with("success", "L'examen a bien été ajouté");
        
    }
}
