<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome='Biagio Rosario';
    $cognome='Secolo';
    return view('home',compact('nome','cognome'));
})->name('home');

Route::get('/Chi sono',function (){
    $title='Io sono io';
    $description='Questa è una descrizione di prova.';
    return view('chi-sono',compact('title','description'));
})->name('about_me');

Route::get('/Contatti',function (){
    return view('contatti');
})->name('contact');

Route::get('/Articoli',function (){
    $articoli=[
        ['title'=>'HTML per tutti','category'=>'Videocorsi','description'=>'Corso di formazione per linguaggio HTML di 10 ore'],
        ['title'=>'Piccoli brividi','category'=>'Libri','description'=>'Volume di romanzi horror per bambini'],
        ['title'=>'Usare Laravel framework','category'=>'Videocorsi','description'=>'Corso di apprendimento del framework Laravel e  linguaggio PHP'],
        ['title'=>'Il piccolo principe','category'=>'Libri','description'=>'Romanzo fantasy di fama internazionale'],
    ];
    return view('articoli',compact('articoli'));
})->name('articles');

Route::get('/Articolo/{index}',function ($id) {
    $articoli=[
        ['title'=>'HTML per tutti','category'=>'Contenuti multimediali','description'=>'Corso di formazione per linguaggio HTML di 10 ore'],
        ['title'=>'Piccoli brividi','category'=>'Libri','description'=>'Volume di romanzi horror per bambini'],
        ['title'=>'Usare Laravel framework','category'=>'Contenuti multimediali','description'=>'Corso di apprendimento del framework Laravel e  linguaggio PHP'],
        ['title'=>'Il piccolo principe','category'=>'Libri','description'=>'Romanzo fantasy di fama internazionale'],
    ];
    return view('articolo',compact('id','articoli'));
})->name('article');