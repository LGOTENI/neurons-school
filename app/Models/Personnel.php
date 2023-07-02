<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable= [
        "nom",
        "photo",
        "statut",
        "date_naissance",
        "nationalite",
        "lieu_naissance",
        "matricule",
        "password",
        "documents",
        "adresse",
        "email",
        "telephone",
        "niveau_id",
        "faculte_id",
        "option_id",
        "matiere",
    ];
}
