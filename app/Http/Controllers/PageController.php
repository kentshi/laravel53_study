<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller {

    //
    public function home() {
        $people = ['Taylor', 'Matt', 'Jeffrey'];

//        return view('welcome', compact('people'));
        return view('pages.home');
    }
    
    public function about()
    {
        return view('pages.about');
    }
}
