<?php

namespace App\Http\Controllers;

use App\Models\financeiroCadastro;
use Illuminate\Http\Request;

class financeiroCadastroController extends Controller
{
    public function index () {
        $cadastro = financeiroCadastro::all();

        return view('financeiro.cadastro', compact('cadastro'));
    }
}
