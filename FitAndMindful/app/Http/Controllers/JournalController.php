<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Journal lista
    public function index()
    {
        $journals = Journal::where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->orderBy('date', 'asc')
            ->get();

        return view('journal', compact('journals'));
    }

    // Új bejegyzés form
    public function create()
    {
        return view('journal-operations');
    }

    // Új bejegyzés mentése
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'grateful' => 'required',
            'positive' => 'required',
            'negative' => 'required',
            'thoughts' => 'required',
        ]);

        Journal::create([
            'user_id' => Auth::id(),
            'date' => $request->date,
            'grateful' => $request->grateful,
            'positive' => $request->positive,
            'negative' => $request->negative,
            'thoughts' => $request->thoughts,
        ]);

        return redirect()->route('journal.index');
    }

    // Szerkesztő oldal
    public function edit($id)
    {
        $journal = Journal::where('user_id', Auth::id())->findOrFail($id);
        return view('journal-operations', compact('journal'));
    }

    // Frissítés
    public function update(Request $request, $id)
    {
        $request->validate([
            'grateful' => 'required',
            'positive' => 'required',
            'negative' => 'required',
            'thoughts' => 'required',
        ]);

        $journal = Journal::where('user_id', Auth::id())->findOrFail($id);

        $journal->update([
            'grateful' => $request->grateful,
            'positive' => $request->positive,
            'negative' => $request->negative,
            'thoughts' => $request->thoughts,
        ]);

        return redirect()->route('journal.index');
    }

    // Törlés
    public function destroy($id)
    {
        $journal = Journal::where('user_id', Auth::id())->findOrFail($id);
        $journal->delete();

        return redirect()->route('journal.index');
    }
}
