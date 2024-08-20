<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    // Lister toutes les maisons
    public function index()
    {
        $maisons = Maison::all();
        return response()->json($maisons);
    }

    // Créer une nouvelle maison
    public function store(Request $request)
    {
        $maison = Maison::create($request->all());
        return response()->json($maison, 201);
    }

    // Afficher une maison spécifique
    public function show($id)
    {
        $maison = Maison::find($id);
        return response()->json($maison);
    }

    // Mettre à jour une maison
    public function update(Request $request, $id)
    {
        $maison = Maison::find($id);
        $maison->update($request->all());
        return response()->json($maison);
    }

    // Supprimer une maison
    public function destroy($id)
    {
        Maison::destroy($id);
        return response()->json(null, 204);
    }
}
