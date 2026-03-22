<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // Mostrar todos
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // Formulario crear
    public function create()
    {
        return view('superheroes.create');
    }

    // Guardar
    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'nullable|url',
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index');
    }

    // Mostrar uno
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    // Formulario editar
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    // Actualizar
    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'nullable|url',
        ]);

        $superhero->update($request->all());

        return redirect()->route('superheroes.index');
    }

    // Eliminar
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}