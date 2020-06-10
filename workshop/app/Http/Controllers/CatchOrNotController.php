<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CatchOrNotController extends Controller
{
    public function index(Request $request)
    {
        if (isset ($_POST['run'])) {
            return redirect()->back()->withErrors(['caught' => 'you ran away and did not catch the pokemon']);
        }

        $level = $_POST['level'];
        $getresponse = Http::get("https://pokeapi.co/api/v2/pokemon/" . $_POST['pokeId'] . "/")->object();
        $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/" . random_int(1,150) . "/")->object();
        $chance = 100 - $level + 5;

        function saveToDB($getresponse, $level)
        {
            $user = Auth::user();
            $pokemon = new Pokemon();
            $pokemon->setName($getresponse->name);
            $pokemon->setLevel($level);
            $pokemon->setUserid($user->id);
            $pokemon->save();
        }

        if ($chance > 100) {
            saveToDb($getresponse, $level);
            return redirect()->back()->withErrors(['green' => 'YOU CAUGHT THE POKEMON']);
        } else {
            $random = random_int(1, 100);
            if ($random > $chance) {
                return redirect()->back()->withErrors(['caught' => 'pokeman too stronk']);
            } else {
                saveToDb($getresponse, $level);
                return redirect()->back()->withErrors(['green' => 'YOU CAUGHT THE POKEMON']);
            }
        }

    }
}
