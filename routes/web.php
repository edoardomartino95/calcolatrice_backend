<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ciao/{nome?}/{cognome?}', function ($nome = null, $cognome = null) {
    return json_encode([
        'nome' => $nome,
        'cognome' => $cognome,
        'message' => 'Ciao'
    ]);
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function(){
    return view('home');
});

Route::get('/pippo', function(){
    return view('welcome');
});

Route::get('/calcolatrice', function(){
    return view('calc');
})->name("calcolatrice")->middleware("auth"); //solo se sei loggato ti apre la calcolatrice

