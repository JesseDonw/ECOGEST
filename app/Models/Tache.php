<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $table = 'taches';

    protected $fillable = [
        'description',
        'date_creation',
        'etat',
        'administrateur_id',
    ];

    // Relation avec la table Utilisateurs (Administrateur)
    public function administrateur()
    {
        return $this->belongsTo(Utilisateur::class, 'administrateur_id');
    }

    // Relation avec la table TacheMaison
    public function tachesMaisons()
    {
        return $this->hasMany(TacheMaison::class);
    }
}
