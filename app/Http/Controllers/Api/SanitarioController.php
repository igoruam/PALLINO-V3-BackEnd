<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sanitario;
use Illuminate\Http\Request;

class SanitarioController extends Controller
{
    public function index()
    {
        $sanitari = Sanitario::with('marchio')->get();
        return response()->json($sanitari);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prodotto' => 'required|string|max:255',
            'marchio_id' => 'required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'misure' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
            'scheda_tecnica' => 'nullable|string|max:255',
        ]);

        $sanitario = Sanitario::create($validated);
        return response()->json($sanitario, 201);
    }

    public function show(string $id)
    {
        $sanitario = Sanitario::with('marchio')->findOrFail($id);
        return response()->json($sanitario);
    }

    public function update(Request $request, string $id)
    {
        $sanitario = Sanitario::findOrFail($id);

        $validated = $request->validate([
            'prodotto' => 'sometimes|required|string|max:255',
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'misure' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
            'scheda_tecnica' => 'nullable|string|max:255',
        ]);

        $sanitario->update($validated);
        return response()->json($sanitario);
    }

    public function destroy(string $id)
    {
        $sanitario = Sanitario::findOrFail($id);
        $sanitario->delete();
        return response()->json(null, 204);
    }
}
