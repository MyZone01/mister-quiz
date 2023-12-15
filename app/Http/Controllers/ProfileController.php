<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

        $user = Auth()->user();
        $poucentage = array('art' => 0, 'geography' => 0, 'history' => 0, 'science' => 0, 'sports' => 0);
        //variables that will be used to display user score in each category

        foreach ($poucentage as $key => $value) {
            [$correct, $total] = [explode("/", Auth::user()[$key])[0], explode("/", Auth::user()[$key])[1]];
            $poucentage [strtolower($key) ]= $total>0?(100*$correct)/$total:0;
        }
       
        return view('profile', ['poucentage'=>$poucentage]);
    }
}
