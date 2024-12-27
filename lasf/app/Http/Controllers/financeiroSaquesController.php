<?php

namespace App\Http\Controllers;

use App\Models\financeiroSaques;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroSaquesController extends Controller
{
    public function index () {
        $saques = financeiroSaques::all();

        $colunas = Schema::getColumnListing((new financeiroSaques())->getTable());
        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.saques', compact('saques', 'colunas'));
    }

    public function store (Request $request) {
        $saque = new financeiroSaques();
        $saque->fill($request->all());
        $saque->created_at = now();
        $saque->save();

        return redirect()->route('financeiroSaques.index');
    }

    public function update (Request $request, financeiroSaques $saque) {
        $saque->fill($request->all());
        $saque->save();

        return redirect()->route('financeiroSaques.index');
    }

    public function destroy (financeiroSaques $saque) {
        $saque->delete();
        return redirect()->route('financeiroSaques.index');
    }
}
