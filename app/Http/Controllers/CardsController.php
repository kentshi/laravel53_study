<?php

namespace App\Http\Controllers;

use App\Card;
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
        return view('cards.show', compact('card'));
    }
}
