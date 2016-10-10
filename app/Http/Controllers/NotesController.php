<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Card;
use App\Http\Requests;

class NotesController extends Controller
{
    //
    
    public function store(Request $request, Card $card)
    {
//Method 1
//        $note = new Note;
//        
//        $note->body = $request->body;
//        $card->notes()->save($note);
//        
//Method 2      
//        $note = new Note(['body' => $request->body]);
//        $card->notes()->save($note);
//        
//        or
//        $card->notes()->save(new Note(['body' => $request->body]));
//
//Method 3
//        $card->notes()->create([
//            'body' => $request->body
//        ]);
//        
//Method 4
//        $card->notes()->create($request->all());
//
//Method 5
        $card->addNote(new Note($request->all()));
        
        return back();
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note)
    {
//        dd('hit')
        $note->update($request->all());
        
        return back();
    }
}
