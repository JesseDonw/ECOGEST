<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // Lister toutes les notifications
    public function index()
    {
        $notifications = Notification::all();
        return response()->json($notifications);
    }

    // Créer une nouvelle notification
    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return response()->json($notification, 201);
    }

    // Afficher une notification spécifique
    public function show($id)
    {
        $notification = Notification::find($id);
        return response()->json($notification);
    }

    // Mettre à jour une notification
    public function update(Request $request, $id)
    {
        $notification = Notification::find($id);
        $notification->update($request->all());
        return response()->json($notification);
    }

    // Supprimer une notification
    public function destroy($id)
    {
        Notification::destroy($id);
        return response()->json(null, 204);
    }
}
