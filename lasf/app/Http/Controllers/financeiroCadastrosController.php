<?php

namespace App\Http\Controllers;

use App\Models\financeiroCadastros;
use Illuminate\Http\Request;

class financeiroCadastrosController extends Controller
{
    public function index () {
        $cadastro = financeiroCadastros::all();

        return view('financeiro.cadastros', compact('cadastro'));
    }
}
