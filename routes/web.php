<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts' , function () {

        $contacts =
        [
            'contatto 1',
            'contatto 2',
            'contatto 3',

        ];
        $title = 'QUI CI SONO I NOSTRI CONTATTI';


        return view('contacts', compact('contacts' , 'title'));
});

Route::get('/news' , function () {

    $news = 'WORK IN PROGRESS';

    return view('news' , compact('news'));
});

Route::get('/sponsor' , function () {

    $sponsor = 'QUESTA PAGINA E PER I SPONSOR';


    return view('sponsor' , compact('sponsor'));
});

Route::get('/', function () {
    $title = 'Hello World';



    return view('home' ,
    [

        "titolo" => $title,
    ]);

});

