<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Option;
use App\Models\Niveau;

class NoteControlleur extends Controller
{
    protected function index() {
        $options= Option::all();
        $niveaux= Niveau::all();
        $matieres= Matiere::all();

        // Note::create([
        //     'valeur' => 15,
        //     'etudiant_id' => 1,
        //     'matiere_id' => 1,
        //     'option_id' => 1,
        //     'niveau_id' => 1,
        // ]);

        return view("pages.notes", compact('matieres', 'options', 'niveaux'));
    }

    protected function show($option, $niveau) {
        // dd($option, $niveau, Note::where('niveau_id', '=', $option)->where('option_id', '=', $niveau)->get());
        $options= Option::all();
        $niveaux= Niveau::all();
        $matieres= Matiere::all();
        $notes= Note::where('niveau_id', '=', $option)->where('option_id', '=', $niveau)->get();
        $etudiants= Etudiant::where('option_id','=', $option)->where('niveau_id','=', $niveau)->get();
        return view("pages.register-note", compact('matieres', 'options', 'niveaux', 'etudiants', 'notes'));
    }

    protected function recherche(Request $request) {
        $options= Option::where('faculte_id', '=', 1)->get();
        $niveaux= Niveau::all();
        $params=[$request->option, $request->niveau];
        $matieres= Matiere::all();
        $matieres= Matiere::all();
        $notes= Note::where('niveau_id', '=', $request->option)->where('option_id', '=', $request->niveau)->get();
        $etudiants= Etudiant::where('option_id','=', $request->option)->where('niveau_id','=', $request->niveau)->get();
       
        if ($etudiants->isEmpty()) {
            return redirect()->route("etudiant.index")->with("success", "Aucune donnée n'a été trouvée");
        } else {
            return view("pages.notes", compact("etudiants","niveaux", "options", "matieres", "params","notes"));
        }
        
    }
}
