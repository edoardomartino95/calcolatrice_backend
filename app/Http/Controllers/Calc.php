<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calc extends Controller
{
    public function somma(Request $request){
        $somma = $request->input('num1') + $request->input('num2');

        return response([
            'somma' => $somma
        ]);
    }

    public function sottrazione(Request $request){
        $sottrazione = $request->input('num1') - $request->input('num2');

        return response([
            'sottrazione' => $sottrazione
        ]);
    }

    public function moltiplicazione(Request $request){
        $moltiplicazione = $request->input('num1') * $request->input('num2');

        return response([
            'moltiplicazione' => $moltiplicazione
        ]);
    }

    public function divisione(Request $request){
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
    }
}
