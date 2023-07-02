<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'description',
        'annee',
        'semestre',
        'option_id',
        'matiere_id'
    ];
}
