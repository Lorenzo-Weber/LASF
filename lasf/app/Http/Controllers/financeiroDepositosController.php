<?php

namespace App\Http\Controllers;

use App\Models\financeiroDepositos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroDepositosController extends Controller
{
    public function index () {
        $depositos = financeiroDepositos::all();

        $colunas = Schema::getColumnListing((new financeiroDepositos())->getTable());

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.depositos', compact('depositos', 'colunas'));
    }

    public function store(Request $request) {
        $deposito = new financeiroDepositos();

        $deposito->fill($request->all());
        $deposito->created_at = now();

        $deposito->save();
        return redirect()->route('financeiroDepositos.index');
    }

    public function update (Request $request, financeiroDepositos $deposito) {
        $deposito->fill($request->all());
        $deposito->save();
        return redirect()->route('financeiroDepositos.index');
    }

    public function destroy (financeiroDepositos $deposito) {
        $deposito->delete();
        return redirect()->route('financeiroDepositos.index');
    }
}
