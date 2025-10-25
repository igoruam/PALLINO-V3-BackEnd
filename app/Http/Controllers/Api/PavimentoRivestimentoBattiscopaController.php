<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PavimentoRivestimentoBattiscopa;
use Illuminate\Http\Request;

class PavimentoRivestimentoBattiscopaController extends Controller
{
    public function index()
    {
        $pavimenti = PavimentoRivestimentoBattiscopa::with('marchio')->get();
        return response()->json($pavimenti);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prodotto' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'marchio_id' => 'required|exists:marchios,id',
            'formato' => 'nullable|string|max:255',
            'disponibilita_mq' => 'nullable|numeric|min:0',
            'prezzo_mq_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_mq_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
        ]);

        $pavimento = PavimentoRivestimentoBattiscopa::create($validated);
        return response()->json($pavimento, 201);
    }

    public function show(string $id)
    {
        $pavimento = PavimentoRivestimentoBattiscopa::with('marchio')->findOrFail($id);
        return response()->json($pavimento);
    }

    public function update(Request $request, string $id)
    {
        $pavimento = PavimentoRivestimentoBattiscopa::findOrFail($id);

        $validated = $request->validate([
            'prodotto' => 'sometimes|required|string|max:255',
            'descrizione' => 'nullable|string',
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'formato' => 'nullable|string|max:255',
            'disponibilita_mq' => 'nullable|numeric|min:0',
            'prezzo_mq_senza_iva' => 'nullable|numeric|min:0',
            'prezzo_mq_con_iva' => 'nullable|numeric|min:0',
            'foto' => 'nullable|string|max:255',
        ]);

        $pavimento->update($validated);
        return response()->json($pavimento);
    }

    public function destroy(string $id)
    {
        $pavimento = PavimentoRivestimentoBattiscopa::findOrFail($id);
        $pavimento->delete();
        return response()->json(null, 204);
    }
}
