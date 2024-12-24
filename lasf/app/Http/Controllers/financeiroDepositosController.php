<?php

namespace App\Http\Controllers;

use App\Models\financeiroDepositos;
use Illuminate\Http\Request;

class financeiroDepositosController extends Controller
{
    public function index () {
        $depositos = financeiroDepositos::all();

        return view('financeiro.depositos', compact('depositos'));
    }
}
