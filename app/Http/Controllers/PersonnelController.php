<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\Option;
use App\Models\Niveau;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function enseignantsListe(){

        $matieres= Matiere::all();
        $options= Option::all();
        $niveaux= Niveau::all();
        $enseignants= Personnel::all();

        return view('pages.personnels.enseignant', compact('matieres', 'options', 'niveaux','enseignants'));
    }

    public function enseignantsCreate(Request $request){


        function genererMatricule() {
            $prefixe = 'DSN';
            $longueur = 8;
            $matricule = $prefixe . substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $longueur - strlen($prefixe));
            
            return $matricule;
        }

        function genererPassword() {
            $prefixe = '';
            $longueur = 8;
            $password = $prefixe . substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $longueur - strlen($prefixe));
            
            return $password;
        }
        
        $images= $request->photo;
        $documents= $request->documents;

        if($documents!= null && !$documents->getError()){
            $documentPath=$documents->store('Documents', 'public');
        }

        if($images!= null && !$images->getError()){
            $imagePath=$images->store('Universite', 'public');
        }

        // Utilisation de la fonction genererMatricule()
        $matricule = genererMatricule();
        $password= genererPassword();
        // $niveau=gettype(intval($request->niveau));
        Personnel::create(
            [
                "nom" => $request->nom,
                "photo" => $imagePath,
                "date_naissance" => $request->date_naissance,
                "nationalite" => $request->nationalite,
                "lieu_naissance" => $request->lieu_naissance,
                "matricule" => $matricule,
                "password" => $password,
                "matiere" => $request->matiere,
                "statut" => "enseignant",
                "documents" =>  $documentPath,
                "adresse" => $request->adresse,
                "email" => $request->email,
                "telephone" => $request->telephone,
                'option_id' => $request->option,
                'niveau_id' => $request->niveau,
                'faculte_id' => 1,
            ]
        );

        return redirect()->route("personnels.enseignants.index")->with("success", "L'enseignant a été bien enregistré");
    }
}
