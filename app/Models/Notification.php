<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

    protected $fillable = [
        'tache_maison_id',
        'message',
        'date',
        'type',
    ];

    // Relation avec la table TacheMaisons
    public function tacheMaison()
    {
        return $this->belongsTo(TacheMaison::class);
    }
}
