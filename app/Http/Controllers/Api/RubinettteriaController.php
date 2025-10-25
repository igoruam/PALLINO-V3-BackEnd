<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rubinetteria;
use Illuminate\Http\Request;

class RubinettteriaController extends Controller
{
    public function index()
    {
        $rubinetterie = Rubinetteria::with('marchio')->get();
        return response()->json($rubinetterie);
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

        $rubinetteria = Rubinetteria::create($validated);
        return response()->json($rubinetteria, 201);
    }

    public function show(string $id)
    {
        $rubinetteria = Rubinetteria::with('marchio')->findOrFail($id);
        return response()->json($rubinetteria);
    }

    public function update(Request $request, string $id)
    {
        $rubinetteria = Rubinetteria::findOrFail($id);

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

        $rubinetteria->update($validated);
        return response()->json($rubinetteria);
    }

    public function destroy(string $id)
    {
        $rubinetteria = Rubinetteria::findOrFail($id);
        $rubinetteria->delete();
        return response()->json(null, 204);
    }
}
