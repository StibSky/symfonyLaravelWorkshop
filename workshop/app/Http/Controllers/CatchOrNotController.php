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
        $getresponse = Http::get("https://pokeapi.co/api/v2/pokemon/".$_POST['pokeId']."/")->object();

        $chance = 100-$level + 5;

        function saveToDB($getresponse, $level){
            $pokemon = new Pokemon();
            $pokemon->setName($getresponse->name);
            $pokemon->setLevel($level);
            $pokemon->save();

        }

        if ($chance > 100){
            echo('CETCH');
        } else {
            $random = random_int(1, 100);
            if ($random > $chance){
                echo($random. 'NOT CETCH');
            } else {
                echo($random. 'CETCH');
            }
        }
        saveToDb($getresponse, $level);

    }
}
