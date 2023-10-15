<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index()
    {
            $users = User::orderBy('xp', 'desc')->limit(10)->get();  // Retrieve users and order by xp in descending order

            return view('leaderboard', ['users' => $users]);
    }
}
