<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CatchController extends Controller
{
    public function index()
    {
        $random = random_int(1, 150);

        $getresponse = Http::get("https://pokeapi.co/api/v2/pokemon/".$random."/")->object();
        $user = Auth::user();
        return view('catch.catch', [
            'pokemon' => $getresponse,
            'level' => random_int(1, 100),
            'pokeballs' => $user->pokeballs,
        ]);
    }
}
