<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable=[
        'valeur',
        'etudiant_id',
        'matiere_id',
        'option_id',
        'niveau_id'
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
