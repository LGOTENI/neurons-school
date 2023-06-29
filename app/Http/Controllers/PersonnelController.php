<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function enseignantsListe(){
        return view('pages.personnels.enseignant');
    }
}
