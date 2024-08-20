<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    // Lister tous les utilisateurs
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return response()->json($utilisateurs);
    }

    // Créer un nouvel utilisateur
    public function store(Request $request)
    {
        $utilisateur = Utilisateur::create($request->all());
        return response()->json($utilisateur, 201);
    }

    // Afficher un utilisateur spécifique
    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);
        return response()->json($utilisateur);
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->update($request->all());
        return response()->json($utilisateur);
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        Utilisateur::destroy($id);
        return response()->json(null, 204);
    }
}
