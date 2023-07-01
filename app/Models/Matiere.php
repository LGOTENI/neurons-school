<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable= [
        'nom',
        'description',
        'faculte_id',
        'option_id',
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

}
