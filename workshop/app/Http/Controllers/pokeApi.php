<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\QueryException;

class pokeApi extends Controller
{
    function pokemon() 
    {
        $getresponse = Http::get("https://pokeapi.co/api/v2/ability/1/")->object();
        return view('poke.poke', [
            'response' => $getresponse,
        ]);
    }
    
}

