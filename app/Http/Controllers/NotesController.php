<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\notes;



class NotesController extends Controller
{
    public function index()
    {
        return view('home/index', [
            "title" => "Notes",
            "notes" => notes::all(),
        ]);
    }



    public function show(notes $note)
    {
        return view('details/index', [
            "title" => "A Note",
            "note" => $note,
        ]);
    }



    public function newnote(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'max:255',
        ]);



        notes::create($validatedData);



        return redirect('/')->with('success', 'New Note has been added');
    }



    public function destroy(notes $note)
    {
        notes::destroy($note->id);
        return redirect('/')->with('success', 'Note has been deleted');
    }



    public function edit(notes $note)
    {
        return view('home/edit', [
            "title" => "Edit Note",
            "note" => $note,
        ]);
    }



    public function update(Request $request, notes $note)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'max:255',
        ];



        $updatedData = $request->validate($rules);



        notes::where('id', $note->id)
            ->update($updatedData);



        return redirect('/')->with('success', 'Note has been updated');
    }
}