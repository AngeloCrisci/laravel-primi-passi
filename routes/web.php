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

Route::get('/' , function () {
        $contacts = [
            'contatto 1',
            'contatto 2',
            'contatto 3',
        ];
        $sponsor = 'SONO UNA PAGINA SPONSOR';
        $news = 'SONO TANTI ARTICOLI';

        return view('admin.pages.index', compact("contacts ", "sponsor" , "news" ));
});

Route::get('/', function () {
    $title = 'Hello World';



    return view('home' ,
    [

        "titolo" => $title,
    ]);

});

