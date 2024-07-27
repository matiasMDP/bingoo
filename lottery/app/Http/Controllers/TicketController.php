<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'draw_id' => 'required|exists:draws,id',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'Cartón creado con éxito.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'draw_id' => 'required|exists:draws,id',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'Cartón actualizado con éxito.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Cartón eliminado con éxito.');
    }
}
