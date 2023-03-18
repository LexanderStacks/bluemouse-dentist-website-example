<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function publications()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Publikationen",
            'uri' => "publications"
        ]);
    }
    public function cooperations()
    {
        $posts = \App\Models\Post::published()->type('cooperation')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kooperationen",
            'uri' => "article-image-collage",
            'imageType' => "round",
            'posts' => $posts,
        ]);
    }
    public function mainDoc()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. med. dent. Hansjörg Lammers",
            'uri' => "team.main-doc"
        ]);
    }
    public function secondDoc()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. Jan Chalupa",
            'uri' => "team.second-doc"
        ]);
    }
    public function blogHome()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Blog",
            'uri' => "blog.index"
        ]);
    }
    public function blogDetail()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Blogbeitrag",
            'uri' => "blog.detail"
        ]);
    }
    public function services()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Leistungen",
            'uri' => "services.index"
        ]);
    }
    public function medicalDetox()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "MedicalDetox SPA",
            'uri' => "medical-detox"
        ]);
    }
    public function contact()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kontakt",
            'uri' => "contact"
        ]);
    }
    public function contactOnline()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Online Termin",
            'uri' => "contact-online"
        ]);
    }
    public function aboutCovid()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Interessantes zu Covid-19",
            'uri' => "about-covid"
        ]);
    }
    public function covidTherapy()
    {
        $page = \App\Models\Post::published()->taxonomy('category', 'long-covid-therapy')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Long-Term-Covid",
            'uri' => "covid-therapy",
            'page' => $page,
        ]);
    }
    public function backup()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Rückentraining",
            'uri' => "backup"
        ]);
    }
    public function references()
    {
        $posts = \App\Models\Post::published()->type('reference')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Referenzen",
            'uri' => "article-image-collage",
            'imageType' => "normal",
            'posts' => $posts,
        ]);
    }
    public function materials()
    {
        $posts = \App\Models\Post::published()->type('material')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Materialien",
            'uri' => "article-image-collage",
            'imageType' => "small",
            'posts' => $posts,
        ]);
    }
    public function hygiene()
    {
        $posts = \App\Models\Post::published()->type('hygiene')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Hygienemaßnahmen",
            'uri' => "hygiene",
            'posts' => $posts,
        ]);
    }
    public function about()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Über Uns",
            'uri' => "about"
        ]);
    }
    public function ecoDentist()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Bio-Zahnmedizin",
            'uri' => "eco-dentist"
        ]);
    }
    public function faq()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'uri' => "faq",
            'posts' => $posts,
        ]);
    }
    public function privacy()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Privatsphäre Richtlinien",
            'uri' => "privacy"
        ]);
    }
    public function imprint()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Impressum",
            'uri' => "imprint"
        ]);
    }

}
