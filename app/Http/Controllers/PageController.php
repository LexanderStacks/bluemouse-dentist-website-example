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
            'view' => "publications"
        ]);
    }
    public function cooperations()
    {
        $posts = \App\Models\Post::published()->type('cooperation')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kooperationen",
            'view' => "article-image-collage",
            'imageType' => "round",
            'posts' => $posts,
        ]);
    }
    public function mainDoc()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. med. dent. Hansjörg Lammers",
            'view' => "team.main-doc"
        ]);
    }
    public function secondDoc()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. Jan Chalupa",
            'view' => "team.second-doc"
        ]);
    }
    public function blogHome()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Blog",
            'view' => "blog.index"
        ]);
    }
    public function blogDetail()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Blogbeitrag",
            'view' => "blog.detail"
        ]);
    }
    public function services()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Leistungen",
            'view' => "services.index"
        ]);
    }
    public function medicalDetoxSpa()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "MedicalDetox SPA",
            'view' => "medical-detox-spa"
        ]);
    }
    public function contact()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kontakt",
            'view' => "contact"
        ]);
    }
    public function contactOnline()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Online Termin",
            'view' => "contact-online"
        ]);
    }
    public function aboutCovid()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Interessantes zu Covid-19",
            'view' => "about-covid"
        ]);
    }
    public function covidTherapy()
    {
        $post = \App\Models\Post::taxonomy('category', 'long-covid-therapy')->published()->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Long Term Covid",
            'view' => "page",
            'post' => $post,
            'btnTitle' => 'Interessantes zu Covid-19',
            'btnUri' => '/about-covid'

        ]);
    }
    public function backup()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Rückentraining",
            'view' => "backup"
        ]);
    }
    public function references()
    {
        $posts = \App\Models\Post::published()->type('reference')->with('attachment')->orderBy('menu_order')->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Referenzen",
            'view' => "article-image-collage",
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
            'view' => "article-image-collage",
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
            'view' => "hygiene",
            'posts' => $posts,
        ]);
    }
    public function about()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Über Uns",
            'view' => "about"
        ]);
    }
    public function ecoDentistry()
    {
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Bio-Zahnmedizin",
            'view' => "page"
        ]);
    }
    public function faq()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function privacy()
    {
        $post = \App\Models\Post::taxonomy('category', 'privacy')->published()->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Datenschutzerklärung",
            'view' => "page",
            'post' => $post,
        ]);
    }
    public function imprint()
    {
        $post = \App\Models\Post::taxonomy('category', 'imprint')->published()->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Impressum",
            'view' => "page",
            'post' => $post,
        ]);
    }
    public function holisticDentistry()
    {
        $post = \App\Models\Post::type('page')->slug('holistic-dentistry')->published()->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Ganzheitliche Zahnmedizin",
            'view' => "page",
            'post' => $post,
        ]);
    }
    public function amalgamDetox()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function holisticImplants()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function detox()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function integrativeDentistry()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function jawInflammation()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function interferenceFieldRemediation()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function paradontalTherapy()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function environmentalDentistry()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function halitosis()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }
    public function metalDetox()
    {
        $posts = \App\Models\Post::published()->type('post')->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
        ]);
    }


);
