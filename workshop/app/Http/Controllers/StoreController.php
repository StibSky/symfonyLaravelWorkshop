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
        $COSTONGEN2 = 2000;
        $COSTONGEN3 = 10000;
        if (isset($_POST['pokeball'])){
            if ($user->money < $COSTOFPOKEBALL){
                return redirect()->back()->withErrors(['caught' => "You don't have enough money"]);
            }
            $user->money -= $COSTOFPOKEBALL;
            $user->pokeballs += 1;
            $user->save();
            return redirect()->back()->withErrors(['green' => 'You have bought a pokéball']);
        }
        if (isset($_POST['pokeball10'])){
            if ($user->money < ($COSTOFPOKEBALL*10)){
                return redirect()->back()->withErrors(['caught' => "You don't have enough money"]);
            }
            $user->money -= ($COSTOFPOKEBALL*10);
            $user->pokeballs += 10;
            $user->save();
            return redirect()->back()->withErrors(['green' => 'You have bought 10 pokéballs']);
        }
        if (isset($_POST['gen2unlock'])){
            if ($user->money < ($COSTONGEN2)){
                return redirect()->back()->withErrors(['caught' => "You don't have enough money"]);
            }
            if ($user->unlockgen > 1) {
                return redirect()->back()->withErrors(['caught' => "You already yeeted this"]);
            }
            $user->money -= $COSTONGEN2;
            $user->unlockgen = 2;
            $user->save();
            return redirect()->back()->withErrors(['green' => 'You have bought gen2']);
        }
        if (isset($_POST['gen3unlock'])){
            if ($user->money < ($COSTONGEN3)){
                return redirect()->back()->withErrors(['caught' => "You don't have enough money"]);
            }
            if ($user->unlockgen > 2) {
                return redirect()->back()->withErrors(['caught' => "You already yeeted this"]);
            }
            $user->money -= $COSTONGEN3;
            $user->unlockgen = 3;
            $user->save();
            return redirect()->back()->withErrors(['green' => 'You have bought gen3']);
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
        $pokemon = Pokemon::find([$_POST['sell']])->first();
        $levelnumber = $pokemon->level;
        $betweenNumber = 5 + ($levelnumber/10);
        $finalNumber = round($levelnumber * $betweenNumber);
        $user = Auth::user();
        $user->money += $finalNumber;
        $soldPokemon = Pokemon::destroy($_POST['sell']);

        $user->save();

        return redirect()->route('inventory');
    }
}
