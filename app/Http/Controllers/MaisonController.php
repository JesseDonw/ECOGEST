<?php

namespace App\Http\Controllers;

use App\Models\TacheMaison;
use Illuminate\Http\Request;

class TacheMaisonController extends Controller
{
    // Lister toutes les associations Tâche-Maison
    public function index()
    {
        $tachesMaisons = TacheMaison::all();
        return response()->json($tachesMaisons);
    }

    // Créer une nouvelle association Tâche-Maison
    public function store(Request $request)
    {
        $tacheMaison = TacheMaison::create($request->all());
        return response()->json($tacheMaison, 201);
    }

    // Afficher une association Tâche-Maison spécifique
    public function show($id)
    {
        $tacheMaison = TacheMaison::find($id);
        return response()->json($tacheMaison);
    }

    // Mettre à jour une association Tâche-Maison
    public function update(Request $request, $id)
    {
        $tacheMaison = TacheMaison::find($id);
        $tacheMaison->update($request->all());
        return response()->json($tacheMaison);
    }

    // Supprimer une association Tâche-Maison
    public function destroy($id)
    {
        TacheMaison::destroy($id);
        return response()->json(null, 204);
    }
}
