<?php

namespace App\Http\Controllers;

use App\Models\Draw;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    public function index()
    {
        $draws = Draw::all();
        return view('draws.index', compact('draws'));
    }

    public function create()
    {
        return view('draws.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'scheduled_time' => 'required|date',
        ]);

        Draw::create($request->all());
        return redirect()->route('draws.index')->with('success', 'Sorteo creado con éxito.');
    }

    public function show(Draw $draw)
    {
        return view('draws.show', compact('draw'));
    }

    public function edit(Draw $draw)
    {
        return view('draws.edit', compact('draw'));
    }

    public function update(Request $request, Draw $draw)
    {
        $request->validate([
            'name' => 'required',
            'scheduled_time' => 'required|date',
        ]);

        $draw->update($request->all());
        return redirect()->route('draws.index')->with('success', 'Sorteo actualizado con éxito.');
    }

    public function destroy(Draw $draw)
    {
        $draw->delete();
        return redirect()->route('draws.index')->with('success', 'Sorteo eliminado con éxito.');
    }
}
