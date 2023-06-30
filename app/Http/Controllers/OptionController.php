<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Faculte;

class OptionController extends Controller
{
    protected function index() {
        $options= Option::where('faculte', '=', 1)->get();
        return view("pages.options", compact("options"));
    }

    public function create(Request $request) {

        $faculteId= Faculte::find(1);

        Option::create([
            "nom" => $request->input('nom'),
            "description" => $request->input('description'),
            "faculte" => $faculteId->id,
        ]);
        return redirect()->route("options.index")->with("success", "L'option a bien été ajoutée");
    }

    // public function delete($id) {
    //     console.log($id);
    // }
}
