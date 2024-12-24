<?php

namespace App\Http\Controllers;

use App\Models\apostasApostas;
use Illuminate\Http\Request;

class apostasApostasController extends Controller
{
    public function index () {
        apostasApostas::create([
            'casa' => 'bet',
            'conta' => 'teste',
            'aposta' => '1000',
            'resultado' => '1400',
            'retorno' => '400',
        ]);        
        $apostas = apostasApostas::all();

        return view('apostas.apostas', compact('apostas'));
    }
}
