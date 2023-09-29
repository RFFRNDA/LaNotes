<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notes = $user->notes;

        return view('home/index', [
            "title" => "Notes",
            "notes" => $notes,
        ]);
    }

    public function show(Notes $note)
    {
        return view('details/index', [
            "title" => "A Note",
            "note" => $note,
        ]);
    }

    public function create()
    {
        return view('home.create');
    }

    public function newnote(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'max:255',
        ]);

        $user = Auth::user();
        $note = new Notes($validatedData);
        $user->notes()->save($note);
        
        return redirect('/')->with('success', 'New Note has been added');
    }

    public function destroy(Notes $note)
    {
        $note->delete();
        return redirect('/')->with('success', 'Note has been deleted');
    }

    public function edit(Notes $note)
    {
        return view('home/edit', [
            "title" => "Edit Note",
            "note" => $note,
        ]);
    }

    public function update(Request $request, Notes $note)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'max:255',
        ];

        $updatedData = $request->validate($rules);
        $note->update($updatedData);
        return redirect('/')->with('success', 'Note has been updated');
    }
}
