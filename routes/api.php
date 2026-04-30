<?php

use App\Http\Controllers\Calc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

/*
Route::post('/v1/somma', function (Request $request) {
    $somma = $request->input('num1') + $request->input('num2');

    return response([
        'somma' => $somma
    ]);
});

Route::post('/v1/sottrazione', function (Request $request) {
    $sottrazione = $request->input('num1') - $request->input('num2');

    return response([
        'sottrazione' => $sottrazione
    ]);
});

Route::post('/v1/moltiplicazione', function (Request $request) {
    $moltiplicazione = $request->input('num1') * $request->input('num2');

    return response([
        'moltiplicazione' => $moltiplicazione
    ]);
});

Route::post('/v1/divisione', function (Request $request) {
    if( $request->input('num2') != 0) {
        $divisione = $request->input('num1') / $request->input('num2');

    return response([
        'divisione' => $divisione
    ]);

    } else {
        return response([
            'messaggio' => "divisione non possibile"
            ]); 
    }   
});
*/


Route::prefix('v1')->group(function () {
    Route::post("/somma",[Calc::class,"somma"]);
    Route::post("/sottrazione",[Calc::class,"sottrazione"]);
    Route::post("/moltiplicazione",[Calc::class,"moltiplicazione"]);
    Route::post("/divisione",[Calc::class,"divisione"]);
});