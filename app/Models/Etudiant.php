<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        "niveau_id",
        "faculte_id",
        "option_id"
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}
