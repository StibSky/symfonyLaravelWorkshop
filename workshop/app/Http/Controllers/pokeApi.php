<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokeApi extends Controller
{
    function pokemon() {
        $getresponse = Http::get("https://pokeapi.co/api/v2/ability/1/");
        $response = json_decode($getresponse);
        var_dump($response);
        return view('welcome', compact('response'));
    }
    }

