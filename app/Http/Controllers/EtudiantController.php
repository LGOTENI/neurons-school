<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Option;


class EtudiantController extends Controller
{
    protected function index() {
        // $options= Option::where('faculte', '=', 1)->get();
        // $etudiants= Etudiant::where('faculte', '=', 1);
        return view("pages.etudiants");
    }

    protected function show() {
        return view("pages.etudiant-profil");
    }
    
    protected function store() {
        $options= Option::where('faculte', '=', 1)->get();
        return view("pages.etudiant-inscription", compact('options'));
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

        if($images!= null && !$images->getError()){
            $imagePath=$images->store('Universite', 'public');
        }

        // Utilisation de la fonction genererMatricule()
        $matricule = genererMatricule();
        $password= genererPassword();
        $niveau=gettype(intval($request->niveau));
        // dd(gettype(intval($request->niveau)));
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
                'option' => $request->option,
                'niveau' => $niveau,
                'faculte' => 1,
            ]
        );

        return redirect()->route("etudiant.index")->with("success", "L'etudiant a été bien enregistré");
    }
}
