<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use App\Models\Note;
use App\Actions\Note\StoreNewNote;

class NoteController extends Controller
{
    
    public function store(Request $request)
    {
        //Validate the form data, if it fails it will return to /home
        $request->validate([
            'summary' => 'required|min:4',
            'stars' =>  'required',
            'hashtags' => 'required',
            'active' => 'required',
            'detail' => 'required'
        ]);
       //dump($request->all());
       $action = new StoreNewNote($request->user_name
       , $request->summary
       , $request->stars
       , $request->hashtags
       , $request->detail
       , $request->active);
       
       //having issues calling the code below from another method or making it static
       $user = Auth::user();
       $matchTheese = ['user_name' => $user->name, 'is_active' => '1'];
       $notes = Note::where($matchTheese)->orderBy('created_at', 'DESC')->get();
       
       return view('/mynotes', [
           'notes' => $notes
       ]);
       
    }

    public function retrieveAll()
    {
        $user = Auth::user();
        $matchTheese = ['user_name' => $user->name, 'is_active' => '1'];
        $notes = Note::where($matchTheese)->orderBy('created_at', 'DESC')->get();
        //dump ($notes);

        return view('/mynotes', [
            'notes' => $notes
        ]);
    }

    public function retrieveOne(Request $request)
    {
        $user = Auth::user();
        $note = Note::where('id', $request->id)->first();
        if (!$note) {
            return redirect('/mynotes')->with(['flash-alert' => 'Error, note not found.']);
        }
        //dump ($note);

        return view('/read', [
            'note' => $note
        ]);
        
    }
    public function delete(Request $request)
    {
        $note = Note::where('id', $request->id)->first();
        if (!$note) {
            return redirect('/mynotes')->with(['flash-alert' => 'Error, note not found.']);
        }
        //dump ($note);

        return view('/delete', [
            'note' => $note
        ]);
        
    }

    public function destroy(Request $request)
    {
        $note_is_deleted = Note::where('id', $request->note_id)->delete();
        if (!$note_is_deleted) {
            return redirect('/mynotes')->with(['flash-alert' => 'Error, note not found.']);
        }

        return redirect('/mynotes');
        
    }

    public function hide(Request $request)
    {
        $note = Note::find($request->id);
        $note->is_active = 0;
        $note->save();
        return redirect('/mynotes');
        
    }

}