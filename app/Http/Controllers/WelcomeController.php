<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function showWelcomeView()
    {
        $posts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "de.welcome.index",
            'title' => "welcome",
            'posts' => $posts,
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
