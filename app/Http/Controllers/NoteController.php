<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()->where('user_id', request()->user()->id)->orderBy('created_at', 'desc')->paginate();
        return view('note.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //post
        $data = $request->validate([
            'note' => ['required', 'string']
        ]);

        $data['user_id'] = $request->user()->id;

        //$data is an associative array with the two key, value pairs note and user_id HOWEVER
        //the Note model has a fillable property that only allows the note and user_id columns to be mass assigned
        //meaning if the user tries to add any other columns to the $data array they will be ignored
        $note = Note::create($data);
        //message is a session directive that will be displayed on the layout
        return to_route('note.show', $note)->with('message', 'Note was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        return view('note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
        //dd($request->all());
        //the request that comes from a form will look at the name attribute of the form elements where the data resides in our case the textarea
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        $data = $request->validate([
            //this time the textareas name is body even though we can have the name to be note
            //for now we will accept the name=body and then rename it to note
            'body' => ['required', 'string']
        ]);

        $data['note'] = $data['body'];
        unset($data['body']);

        $note->update($data);

        return to_route('note.show', $note)->with('message', 'Note was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
        if ($note->user_id !== request()->user()->id) {
            abort(403);
        }
        $note->delete();

        return to_route('note.index')->with('message', 'Note was deleted');
    }
}
