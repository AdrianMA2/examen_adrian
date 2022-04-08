<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function __invoke(){

        $ventas1 =  [12, 23, 5, 9, 7, 10, 4, 9, 14, 10, 3, 6];
        $ventas2 =  [10, 5, 21, 8, 7, 11, 6, 5, 12, 9, 3, 2];
        $meses1 =  ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        return view('dashboard',)->with('ventas1', $ventas1)
        ->with('ventas2', $ventas2)->with('meses1', $meses1);
    }
}
