<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validación de datos
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Lógica para almacenar la suscripción
        // Por ejemplo, puedes guardar los datos en la base de datos

        // Retornar un mensaje de éxito o redirigir
        return redirect()->back()->with('success', 'Te has suscrito correctamente al boletín.');
    }
}
