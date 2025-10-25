<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stufa;
use Illuminate\Http\Request;

class StufaController extends Controller
{
    public function index()
    {
        $stufe = Stufa::with('marchio')->get();
        return response()->json($stufe);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prodotto' => 'required|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'potenza' => 'nullable|string|max:255',
            'combustione' => 'nullable|string|max:255',
            'marchio_id' => 'required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
        ]);

        $stufa = Stufa::create($validated);
        return response()->json($stufa, 201);
    }

    public function show(string $id)
    {
        $stufa = Stufa::with('marchio')->findOrFail($id);
        return response()->json($stufa);
    }

    public function update(Request $request, string $id)
    {
        $stufa = Stufa::findOrFail($id);

        $validated = $request->validate([
            'prodotto' => 'sometimes|required|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'potenza' => 'nullable|string|max:255',
            'combustione' => 'nullable|string|max:255',
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'disponibilita' => 'nullable|integer|min:0',
            'prezzo_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
        ]);

        $stufa->update($validated);
        return response()->json($stufa);
    }

    public function destroy(string $id)
    {
        $stufa = Stufa::findOrFail($id);
        $stufa->delete();
        return response()->json(null, 204);
    }
}
