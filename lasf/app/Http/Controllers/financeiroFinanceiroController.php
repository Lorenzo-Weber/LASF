<?php

namespace App\Http\Controllers;

use App\Models\financeiroFinanceiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroFinanceiroController extends Controller
{
    public function index () {
        $financeiro = financeiroFinanceiro::all();
        $colunas = Schema::getColumnListing((new financeiroFinanceiro())->getTable());

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.financeiro', compact('financeiro', 'colunas'));
    }
}
