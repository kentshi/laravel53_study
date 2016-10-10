<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();
        
        return $user;
    }
    
    public function show(User $user)
    {
        return $user;
    }
}
