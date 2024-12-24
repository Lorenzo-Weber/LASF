<?php

namespace App\Http\Controllers;

use App\Models\financeiroCadastroBanco;
use Illuminate\Http\Request;

class financeiroCadastroBancoController extends Controller
{
    public function index () {
        $cadastroBanco = financeiroCadastroBanco::all();

        return view('financeiro.cadastroBanco', compact('cadastroBanco'));
    }
}
