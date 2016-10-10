<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    //
    public function index()
    {
        $cards = Card::all(); // DB::table('cards')->get();
        
        return view('cards.index', compact('cards'));
    }
    
    public function show(Card $card)
    {
        $card->load('notes.user');
        $users = User::all();
        return view('cards.show', array('card' => $card, 'users' => $users));
    }
}
