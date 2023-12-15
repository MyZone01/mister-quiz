<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeControoler extends Controller
{
    public function index()
    {

        $users = User::orderBy('xp', 'desc')->limit(10)->get();  // Retrieve users and order by xp in descending order
        return  view('home', ['users' => $users]);
    }
}
