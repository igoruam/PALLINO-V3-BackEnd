<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marchio;
use Illuminate\Http\Request;

class MarchioController extends Controller
{
    public function index()
    {
        $marchi = Marchio::with('referenti')->get();
        return response()->json($marchi);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255|unique:marchios',
            'categoria' => 'nullable|string|max:255',
            'indirizzo' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'num_telefono' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        $marchio = Marchio::create($validated);
        return response()->json($marchio, 201);
    }

    public function show(string $id)
    {
        $marchio = Marchio::with('referenti')->findOrFail($id);
        return response()->json($marchio);
    }

    public function update(Request $request, string $id)
    {
        $marchio = Marchio::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255|unique:marchios,nome,' . $id,
            'categoria' => 'nullable|string|max:255',
            'indirizzo' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'num_telefono' => 'nullable|string|max:255',
            'logo' => 'nullable|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        $marchio->update($validated);
        return response()->json($marchio);
    }

    public function destroy(string $id)
    {
        $marchio = Marchio::findOrFail($id);
        $marchio->delete();
        return response()->json(null, 204);
    }
}
