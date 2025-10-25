<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ComplementoArredo;
use Illuminate\Http\Request;

class ComplementoArredoController extends Controller
{
    public function index()
    {
        $complementi = ComplementoArredo::with('marchio')->get();
        return response()->json($complementi);
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

        $complemento = ComplementoArredo::create($validated);
        return response()->json($complemento, 201);
    }

    public function show(string $id)
    {
        $complemento = ComplementoArredo::with('marchio')->findOrFail($id);
        return response()->json($complemento);
    }

    public function update(Request $request, string $id)
    {
        $complemento = ComplementoArredo::findOrFail($id);

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

        $complemento->update($validated);
        return response()->json($complemento);
    }

    public function destroy(string $id)
    {
        $complemento = ComplementoArredo::findOrFail($id);
        $complemento->delete();
        return response()->json(null, 204);
    }
}
