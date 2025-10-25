<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Illuminazione;
use Illuminate\Http\Request;

class IlluminazioneController extends Controller
{
    public function index()
    {
        $illuminazione = Illuminazione::with('marchio')->get();
        return response()->json($illuminazione);
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
        ]);

        $illuminazione = Illuminazione::create($validated);
        return response()->json($illuminazione, 201);
    }

    public function show(string $id)
    {
        $illuminazione = Illuminazione::with('marchio')->findOrFail($id);
        return response()->json($illuminazione);
    }

    public function update(Request $request, string $id)
    {
        $illuminazione = Illuminazione::findOrFail($id);

        $validated = $request->validate([
            'prodotto' => 'sometimes|required|string|max:255',
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'misure' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
        ]);

        $illuminazione->update($validated);
        return response()->json($illuminazione);
    }

    public function destroy(string $id)
    {
        $illuminazione = Illuminazione::findOrFail($id);
        $illuminazione->delete();
        return response()->json(null, 204);
    }
}
