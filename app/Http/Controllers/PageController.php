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
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kooperationen",
            'view' => "article-image-collage",
            'imageType' => "round",
            'posts' => $posts,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function mainDoc()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. med. dent. Hansjörg Lammers",
            'view' => "team.main-doc",
            'blogPosts' => $blogPosts,
        ]);
    }
    public function secondDoc()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Dr. Jan Chalupa",
            'view' => "team.second-doc",
            'blogPosts' => $blogPosts,
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
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Blogbeitrag",
            'view' => "blog.detail",
            'blogPosts' => $blogPosts,
        ]);
    }
    public function services()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Leistungen",
            'view' => "services.index",
            'blogPosts' => $blogPosts,
        ]);
    }
    public function medicalDetoxSpa()
    {
        $posts = \App\Models\Post::published()->type('spa_elements')->with('attachment')->orderBy('menu_order')->get();
        $secondPost = \App\Models\Post::published()->type('page')->slug('spa-description')->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Medical Detox SPA",
            'view' => "article-image-collage",
            'imageType' => "round",
            'posts' => $posts,
            'secondPost' => $secondPost,
        ]);
    }
    public function contact()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kontakt",
            'view' => "contact",
            'alertTitle' => null,
            'alertMessage' => null,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function contactOnline()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Online Termin",
            'view' => "contact-online",
            'alertTitle' => null,
            'alertMessage' => null,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function aboutCovid()
    {
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Interessantes zu Covid-19",
            'view' => "about-covid",
            'blogPosts' => $blogPosts,
        ]);
    }
    public function covidTherapy()
    {
        $post = \App\Models\Post::published()->taxonomy('category', 'long-covid-therapy')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Long Term Covid",
            'view' => "page",
            'post' => $post,
            'btnTitle' => 'Interessantes zu Covid-19',
            'btnUri' => '/about-covid',
            'blogPosts' => $blogPosts,

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
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Referenzen",
            'view' => "article-image-collage",
            'imageType' => "normal",
            'posts' => $posts,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function materials()
    {
        $posts = \App\Models\Post::published()->type('material')->with('attachment')->orderBy('menu_order')->get();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Materialien",
            'view' => "article-image-collage",
            'imageType' => "small",
            'posts' => $posts,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function hygiene()
    {
        $posts = \App\Models\Post::published()->type('hygiene')->with('attachment')->orderBy('menu_order')->get();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Hygienemaßnahmen",
            'view' => "hygiene",
            'posts' => $posts,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function about()
    {
        $post = \App\Models\Post::published()->type('page')->slug('about')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Über Uns",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
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
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.blog-page",
            'title' => "FAQ",
            'view' => "faq",
            'posts' => $posts,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function privacy()
    {
        $post = \App\Models\Post::published()->taxonomy('category', 'privacy')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Datenschutzerklärung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function imprint()
    {
        $post = \App\Models\Post::published()->taxonomy('category', 'imprint')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Impressum",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function holisticDentistry()
    {
        $post = \App\Models\Post::published()->type('page')->slug('holistic-dentistry')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Ganzheitliche Zahnmedizin",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function amalgamDetox()
    {
        $post = \App\Models\Post::published()->type('page')->slug('amalgam-detox')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Amalgamsanierung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function holisticImplants()
    {
        $post = \App\Models\Post::published()->type('page')->slug('holistic-implants')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Ganzheitliche Implantate",
            'view' => "page",
            'post' => $post,
            'imgAttachment' => true,
            'imgType' => 'normal',
            'pdfAttachmentTitle' => 'zertifikat_zeramex',
            'blogPosts' => $blogPosts,
        ]);
    }
    public function detox()
    {
        $post = \App\Models\Post::published()->type('page')->slug('detox')->with('attachment')->firstOrFail();
        $secondPost = \App\Models\Post::published()->type('page')->slug('detox-2')->with('attachment')->firstOrFail();
        $elements = \App\Models\Post::published()->type('detox-day')->with('attachment')->orderBy('menu_order')->get();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Detox",
            'view' => "page",
            'post' => $post,
            'secondPost' => $secondPost,
            'elements' => $elements,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function integrativeDentistry()
    {
        $post = \App\Models\Post::published()->type('page')->slug('integrative-dentistry')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Integrative Zahnmedizin",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function jawInflammation()
    {
        $post = \App\Models\Post::published()->type('page')->slug('jaw-inflammation')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kieferknochen-Entzündung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function interferenceFieldRemediation()
    {
        $post = \App\Models\Post::published()->type('page')->slug('interference-field-remediation')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Störfeldsanierung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function paradontalTherapy()
    {
        $post = \App\Models\Post::published()->type('page')->slug('paradontal-therapy')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Paradontitisbehandlung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function environmentalDentistry()
    {
        $post = \App\Models\Post::published()->type('page')->slug('environmental-dentistry')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Umweltzahnmedizin",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function halitosis()
    {
        $post = \App\Models\Post::published()->type('page')->slug('halitosis')->with('attachment')->firstOrFail();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Mundgeruch",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function metalDetox()
    {
        $post = \App\Models\Post::published()->type('page')->slug('metal-detox')->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();
        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Metallsanierung",
            'view' => "page",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function servicePage($slot)
    {
        $post = \App\Models\Post::published()->type('page')->slug($slot)->with('attachment')->firstOrFail();
        $blogPosts = \App\Models\Post::taxonomy('category', 'blog')->with('attachment')->limit(1)->get();

        $title = $this->shortTitle($post->title);

        return view('layouts.app', [
            'page' => "pages.index",
            'title' => $title,
            'view' => "services.detail",
            'post' => $post,
            'blogPosts' => $blogPosts,
        ]);
    }
    public function shortTitle($longTitle)
    {
        if ( str_contains($longTitle, ' in Düsseldorf') ) {
            $title = str_replace(' in Düsseldorf', '', $longTitle);
        }
        else{
            $title = $longTitle;
        }
        return $title;
    }


}
