<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function showWelcomeView()
    {
        return view('layouts.app', [
            'page' => "de.welcome.index",
            'title' => "welcome",
        ]);
    }
    public function showWelcomeViewEnglish()
    {
        return view('layouts.app', [
            'page' => "en.welcome.index",
            'title' => "welcome",
        ]);
    }

}
