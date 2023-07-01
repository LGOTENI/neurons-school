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
        // $option= Matiere::find(1);
        $matieres= Matiere::where('faculte_id', '=', 1)->get();
        // dd($matieres->option);
        return view("pages.matieres", compact('options', 'matieres'));
    }

    public function create(Request $request) {

        $faculteId= Faculte::find(1);

        Matiere::create(
            [
                'nom' => $request->nom,
                'description' => $request->description,
                "faculte_id" => $faculteId->id,
                "option_id" => $request->option
            ]
        );

        return redirect()->route("matieres.index")->with("success", "La matiere a bien été enregistrée");
    }
}
