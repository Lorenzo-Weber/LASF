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

    public function store (Request $request) {
        $financeiro = new financeiroFinanceiro();
        $financeiro->fill($request->all());
        $financeiro->created_at = now();
        $financeiro->save();

        return redirect()->route('financeiroFinanceiro.index');
    }

    public function update (Request $request, financeiroFinanceiro $financeiro) {
        $financeiro->fill($request->all());
        $financeiro->save();

        return redirect()->route('financeiroFinanceiro.index');
    }

    public function destroy (financeiroFinanceiro $financeiro) {
        $financeiro->delete();
        return redirect()->route('financeiroFinanceiro.index');
    }
}
