<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\Option;
use App\Models\Faculte;

class MatiereController extends Controller
{
    protected function index() {
        $options= Option::where("id", "=", 1)->get();
        $matieres= Matiere::where('faculte', '=', 1)->get();

        return view("pages.matieres", compact('options', 'matieres'));
    }

    public function create(Request $request) {

        $faculteId= Faculte::find(1);

        Matiere::create(
            [
                'nom' => $request->nom,
                'description' => $request->description,
                "faculte" => $faculteId->id,
                "option" => $request->option
            ]
        );

        return redirect()->route("matieres.index")->with("success", "La matiere a bien été enregistrée");
    }
}
