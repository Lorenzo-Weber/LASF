<?php

namespace App\Http\Controllers;

use App\Models\apostasResultados;
use Illuminate\Http\Request;

class apostasResultadosController extends Controller
{
    public function index () {
        $resultados = apostasResultados::all();

        return view('apostas.resultados', compact('resultados'));
    }
}
