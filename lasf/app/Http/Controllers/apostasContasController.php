<?php

namespace App\Http\Controllers;

use App\Models\apostasContas;
use Illuminate\Http\Request;

class apostasContasController extends Controller
{
    public function index () {
        $contas = apostasContas::all();

        return view('apostas.contas', compact('contas'));
    }
}
