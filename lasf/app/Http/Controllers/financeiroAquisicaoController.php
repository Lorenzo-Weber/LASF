<?php

namespace App\Http\Controllers;

use App\Models\financeiroAquisicao;
use Illuminate\Http\Request;

class financeiroAquisicaoController extends Controller
{
    public function index () {
        $aquisicao = financeiroAquisicao::all();

        return view('financeiro.aquisicao', compact('aquisicao'));
    }
}
