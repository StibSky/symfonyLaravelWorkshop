<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $COSTOFPOKEBALL = 100;
        if (isset($_POST['pokeball'])){
            if ($user->money < $COSTOFPOKEBALL){
                return redirect()->back()->withErrors(['caught' => "You don't have enough money"]);
            }
            $user->money -= $COSTOFPOKEBALL;
            $user->pokeballs += 1;
            $user->save();
            return redirect()->back()->withErrors(['green' => 'You have bought a pokéball']);
        }

        return view('store.store', [
        ]);
    }

    public function display()
    {
        return view('store.store', [
        ]);
    }
    public function sell()
    {
        $soldPokemon = Pokemon::destroy($_POST['sell']);
        $user = Auth::user();
        $user->money += 100;
        $user->save();

        return redirect()->route('inventory');
    }
}
