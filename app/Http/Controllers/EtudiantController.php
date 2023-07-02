<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Option;
use App\Models\Niveau;
use App\Models\User;
use Illuminate\Support\Facades\File;


class EtudiantController extends Controller
{
    protected function index() {
        $options= Option::where('faculte_id', '=', 1)->get();
        $niveaux= Niveau::all();
        return view("pages.etudiants", compact("options","niveaux"));
    }

    protected function show($id) {
        $etudiant= Etudiant::find($id);
        $user= User::where('etudiant_id', '=', $id)->get();
        $verif= true;
        if ($user->isEmpty()) {
            $verif= false;
        }
        return view("pages.etudiant-profil", compact("etudiant","verif"));
    }

    protected function compte(Etudiant $etudiant){
        User::create([
            'name' => $etudiant->nom,
            'statut' => $etudiant->statut,
            'email' => $etudiant->matricule,
            'etudiant_id' => $etudiant->id,
            'password'=> $etudiant->password,
        ]);
        return redirect()->route("etudiant.show", ['id' =>  $etudiant->id])->with("success", "Le compte a été activé avec succes");

    }

    protected function recherche(Request $request) {
        $options= Option::where('faculte_id', '=', 1)->get();
        $niveaux= Niveau::all();
        $etudiants= Etudiant::where('option_id','=', $request->option)->where('niveau_id','=', $request->niveau)->get();
        
        if ($etudiants->isEmpty()) {
            return redirect()->route("etudiant.index")->with("success", "Aucune donnée n'a été trouvée");
        } else {
            return view("pages.etudiants", compact("etudiants","niveaux", "options"));
        }
        
    }
    
    protected function store() {
        $options= Option::where('faculte_id', '=', 1)->get();
        $niveaux= Niveau::all();
        return view("pages.etudiant-inscription", compact('options','niveaux'));
    }

    protected function create(Request $request) {

        
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

        if($images != null && !$images->getError()){
            $imagePath=$images->store('Universite', 'public');
        }

        // Utilisation de la fonction genererMatricule()
        $matricule = genererMatricule();
        $password= genererPassword();
        // $niveau=gettype(intval($request->niveau));
        Etudiant::create(
            [
                "nom" => $request->nom,
                "photo" => $imagePath,
                "date_naissance" => $request->date_naissance,
                "nationalite" => $request->nationalite,
                "lieu_naissance" => $request->lieu_naissance,
                "matricule" => $matricule,
                "password" => $password,
                "documents" =>  $documentPath,
                "adresse" => $request->adresse,
                "email" => $request->email,
                "telephone" => $request->telephone,
                'option_id' => $request->option,
                'niveau_id' => $request->niveau,
                'faculte_id' => 1,
            ]
        );

        return redirect()->route("etudiant.index")->with("success", "L'etudiant a été bien enregistré");
    }
}
