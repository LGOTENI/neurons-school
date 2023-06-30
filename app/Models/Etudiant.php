<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable= [
        "nom",
        "photo",
        "date_naissance",
        "nationalite",
        "lieu_naissance",
        "matricule",
        "password",
        "documents",
        "adresse",
        "email",
        "telephone",
    ];
}
