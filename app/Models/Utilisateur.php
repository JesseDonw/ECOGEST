<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom',
        'adresse',
        'email',
        'mot_de_passe',
        'role',
    ];

    // Relation avec la table Maisons
    public function maisons()
    {
        return $this->hasMany(Maison::class);
    }

    // Relation avec les tâches en tant qu'agent
    public function tachesMaisons()
    {
        return $this->hasMany(TacheMaison::class, 'agent_id');
    }

    // Relation avec les tâches en tant qu'administrateur
    public function tachesAdmin()
    {
        return $this->hasMany(Tache::class, 'administrateur_id');
    }
}
