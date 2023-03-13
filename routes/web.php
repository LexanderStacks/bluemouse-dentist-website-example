<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 
    [App\Http\Controllers\WelcomeController::class, 'showWelcomeView']
);
Route::get('/en/', 
    [App\Http\Controllers\WelcomeController::class, 'showWelcomeViewEnglish']
);
/* --- PAGES --- */
Route::get('/publications', 
    [App\Http\Controllers\PageController::class, 'publications']
);
Route::get('/trainings', 
    [App\Http\Controllers\PageController::class, 'trainings']
);
Route::get('/cooperations', 
    [App\Http\Controllers\PageController::class, 'cooperations']
);
Route::get('/doc/main', 
    [App\Http\Controllers\PageController::class, 'mainDoc']
);
Route::get('/doc/second', 
    [App\Http\Controllers\PageController::class, 'secondDoc']
);
Route::get('/blog/index', 
    [App\Http\Controllers\PageController::class, 'blogHome']
);
Route::get('/blog/detail', 
    [App\Http\Controllers\PageController::class, 'blogDetail']
);
Route::get('/services', 
    [App\Http\Controllers\PageController::class, 'services']
);
Route::get('/medical-detox', 
    [App\Http\Controllers\PageController::class, 'medicalDetox']
);
Route::get('/contact', 
    [App\Http\Controllers\PageController::class, 'contact']
);
Route::get('/contact-online', 
    [App\Http\Controllers\PageController::class, 'contactOnline']
);
Route::get('/about-covid', 
    [App\Http\Controllers\PageController::class, 'aboutCovid']
);
Route::get('/covid-therapy', 
    [App\Http\Controllers\PageController::class, 'covidTherapy']
);
Route::get('/backup', 
    [App\Http\Controllers\PageController::class, 'backup']
);
Route::get('/references', 
    [App\Http\Controllers\PageController::class, 'references']
);
Route::get('/materials', 
    [App\Http\Controllers\PageController::class, 'materials']
);
Route::get('/hygiene', 
    [App\Http\Controllers\PageController::class, 'hygiene']
);
Route::get('/about', 
    [App\Http\Controllers\PageController::class, 'about']
);
Route::get('/eco-dentist', 
    [App\Http\Controllers\PageController::class, 'ecoDentist']
);
Route::get('/faq', 
    [App\Http\Controllers\PageController::class, 'faq']
);
Route::get('/privacy', 
    [App\Http\Controllers\PageController::class, 'privacy']
);
Route::get('/imprint', 
    [App\Http\Controllers\PageController::class, 'imprint']
);
/* --- ./ PAGES --- */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
