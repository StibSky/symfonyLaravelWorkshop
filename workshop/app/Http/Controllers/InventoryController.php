<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inventoryController extends Controller
{
    function index() {

        $user = Pokemon::with('user')
            ->where('userid', Auth::id())
            ->paginate('10');


        return view('inventory.inventory', [
            'pokemons' => $user,
        ]);
    }


}
