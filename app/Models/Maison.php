<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    use HasFactory;

    protected $table = 'maisons';

    protected $fillable = [
        'adresse',
        'utilisateur_id',
    ];

    // Relation avec la table Utilisateurs
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    // Relation avec la table TacheMaison
    public function tachesMaisons()
    {
        return $this->hasMany(TacheMaison::class);
    }
}
