<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacheMaison extends Model
{
    use HasFactory;

    protected $table = 'tache_maisons';

    protected $fillable = [
        'tache_id',
        'maison_id',
        'agent_id',
        'date_notification',
        'etat',
        'date_validation',
    ];

    // Relation avec la table Taches
    public function tache()
    {
        return $this->belongsTo(Tache::class);
    }

    // Relation avec la table Maisons
    public function maison()
    {
        return $this->belongsTo(Maison::class);
    }

    // Relation avec la table Utilisateurs (Agent)
    public function agent()
    {
        return $this->belongsTo(Utilisateur::class, 'agent_id');
    }

    // Relation avec la table Notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
