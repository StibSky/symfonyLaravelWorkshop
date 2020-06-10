<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatchOrNotController extends Controller
{
    public function index(Request $request)
    {
        $level = $_POST['level'];
        $getresponse = Http::get("https://pokeapi.co/api/v2/pokemon/" . $_POST['pokeId'] . "/")->object();
        $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/" . random_int(1,150) . "/")->object();
        $chance = 100 - $level + 5;

        function saveToDB($getresponse, $level)
        {
            $pokemon = new Pokemon();
            $pokemon->setName($getresponse->name);
            $pokemon->setLevel($level);
            $pokemon->save();
        }

        if ($chance > 100) {
            saveToDb($getresponse, $level);
        } else {
            $random = random_int(1, 100);
            if ($random > $chance) {
                return redirect()->back()->withErrors(['caught' => 'pokeman too stronk']);
            } else {
                saveToDb($getresponse, $level);
            }
        }

    }
}
