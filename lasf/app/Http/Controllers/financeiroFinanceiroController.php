<?php

namespace App\Http\Controllers;

use App\Models\financeiroFinanceiro;
use Illuminate\Http\Request;

class financeiroFinanceiroController extends Controller
{
    public function index () {
        $financeiro = financeiroFinanceiro::all();

        return view('financeiro.financeiro', compact('financeiro'));
    }
}
