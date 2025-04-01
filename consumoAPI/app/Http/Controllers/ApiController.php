<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apiPersonajes;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $personajes = apiPersonajes::all();
        return view('personajes.index', compact('personajes'));
    }

    public function indexApi()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $personajes = $response->json()['data'];
        
        return view('personajes.api-index', compact('personajes'));
    }

    public function show($id)
    {
        $personajes = apiPersonajes::findOrFail($id);
        return view('personajes.show', compact('personajes'));
    }

    public function edit($id)
    {
        $personajes = apiPersonajes::findOrFail($id);
        return view('personajes.edit', compact('personajes'));
    }

    public function update(Request $request, $id)
    {
        $personajes = apiPersonajes::findOrFail($id);
        $personajes->update($request->all());
        
        return redirect()->route('personajes.index')->with( 'Actualizado correctamente');
    }

    public function store()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $apiPersonajes = $response->json()['results'];

        foreach ($apiPersonajes as $apiPersonaje) {
            apiPersonajes::updateOrCreate(
                ['api_id' => $apiPersonaje['id']],
                [
                    'name' => $apiPersonaje['name'],
                    'status' => $apiPersonaje['status'],
                    'species' => $apiPersonaje['species'],
                    'type' => $apiPersonaje['type'],
                    'gender' => $apiPersonaje['gender'],
                    'origin_name' => $apiPersonaje['origin']['name'],
                    'origin_url' => $apiPersonaje['origin']['url'],
                    'image' => $apiPersonaje['image'],
                ]
            );
        }

        return redirect()->route('personajes.index')->with('Guardados correctamente');   }
}