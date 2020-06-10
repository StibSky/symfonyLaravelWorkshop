<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $user = new User();
        $user->setAttribute('name', 'yeet');
        $name = $user->getAttribute('name');

        return view('homepage.homepage', [
            'name' => $name,
        ]);
    }
}
