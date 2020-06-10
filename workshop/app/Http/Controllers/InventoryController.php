<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inventoryController extends Controller
{
    function index() {

        $user = Pokemon::with('users')
            ->where('userid', Auth::user()->id);


        foreach ($user as $pokemon) {
            var_dump($pokemon->name);
        }


        return view('inventory.inventory', [

        ]);
    }
}
