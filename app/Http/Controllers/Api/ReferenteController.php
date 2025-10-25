<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Referente;
use Illuminate\Http\Request;

class ReferenteController extends Controller
{
    public function index()
    {
        $referenti = Referente::with('marchio')->get();
        return response()->json($referenti);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'marchio_id' => 'required|exists:marchios,id',
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'numero_telefono' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $referente = Referente::create($validated);
        return response()->json($referente, 201);
    }

    public function show(string $id)
    {
        $referente = Referente::with('marchio')->findOrFail($id);
        return response()->json($referente);
    }

    public function update(Request $request, string $id)
    {
        $referente = Referente::findOrFail($id);

        $validated = $request->validate([
            'marchio_id' => 'sometimes|required|exists:marchios,id',
            'nome' => 'sometimes|required|string|max:255',
            'cognome' => 'sometimes|required|string|max:255',
            'numero_telefono' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $referente->update($validated);
        return response()->json($referente);
    }

    public function destroy(string $id)
    {
        $referente = Referente::findOrFail($id);
        $referente->delete();
        return response()->json(null, 204);
    }
}
