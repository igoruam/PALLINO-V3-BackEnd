<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BoxDoccia;
use Illuminate\Http\Request;

class BoxDocciaController extends Controller
{
    public function index()
    {
        $boxDoccia = BoxDoccia::with('marchio')->get();
        return response()->json($boxDoccia);
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
            'descrizione' => 'nullable|string',
        ]);

        $box = BoxDoccia::create($validated);
        return response()->json($box, 201);
    }

    public function show(string $id)
    {
        $box = BoxDoccia::with('marchio')->findOrFail($id);
        return response()->json($box);
    }

    public function update(Request $request, string $id)
    {
        $box = BoxDoccia::findOrFail($id);

        $validated = $request->validate([
            'prodotto' => 'sometimes|required|string|max:255',
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'misure' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        $box->update($validated);
        return response()->json($box);
    }

    public function destroy(string $id)
    {
        $box = BoxDoccia::findOrFail($id);
        $box->delete();
        return response()->json(null, 204);
    }
}
