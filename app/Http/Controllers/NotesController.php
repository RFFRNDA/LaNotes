<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notes;
class NotesController extends Controller
{
    public function index()
    {
        return view('home/index',[
            "title" => "Notes",
            "notes" => notes::all()
        ]);
    }

    public function show(notes $note )
    {
        return view('details/index',[
            "title"=>"A Note",
            "note" => $note
        ]);
    }
    public function newnote(Request $request )
    {
        $validatedData=$request->validate([
            'title'=>'required|max:255',
            'content'=>'max:255'
        ]);

        notes::create($validatedData);

        return redirect('/')->with('Success','New Notes has been added');
    }
}
