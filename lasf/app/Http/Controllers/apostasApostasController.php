<?php

namespace App\Http\Controllers;

use App\Models\apostasApostas;
use Illuminate\Http\Request;

class apostasApostasController extends Controller
{
    public function index () {    
        $apostas = apostasApostas::all();

        return view('apostas.apostas', compact('apostas'));
    }
}
