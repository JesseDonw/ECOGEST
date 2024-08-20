<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    // Lister toutes les tâches
    public function index()
    {
        $taches = Tache::all();
        return response()->json($taches);
    }

    // Créer une nouvelle tâche
    public function store(Request $request)
    {
        $tache = Tache::create($request->all());
        return response()->json($tache, 201);
    }

    // Afficher une tâche spécifique
    public function show($id)
    {
        $tache = Tache::find($id);
        return response()->json($tache);
    }

    // Mettre à jour une tâche
    public function update(Request $request, $id)
    {
        $tache = Tache::find($id);
        $tache->update($request->all());
        return response()->json($tache);
    }

    // Supprimer une tâche
    public function destroy($id)
    {
        Tache::destroy($id);
        return response()->json(null, 204);
    }
}
