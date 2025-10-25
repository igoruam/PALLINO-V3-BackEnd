<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Termoarredo;
use Illuminate\Http\Request;

class TermoarredoController extends Controller
{
    public function index()
    {
        $termoarredi = Termoarredo::with('marchio')->get();
        return response()->json($termoarredi);
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

        $termoarredo = Termoarredo::create($validated);
        return response()->json($termoarredo, 201);
    }

    public function show(string $id)
    {
        $termoarredo = Termoarredo::with('marchio')->findOrFail($id);
        return response()->json($termoarredo);
    }

    public function update(Request $request, string $id)
    {
        $termoarredo = Termoarredo::findOrFail($id);

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

        $termoarredo->update($validated);
        return response()->json($termoarredo);
    }

    public function destroy(string $id)
    {
        $termoarredo = Termoarredo::findOrFail($id);
        $termoarredo->delete();
        return response()->json(null, 204);
    }
}
