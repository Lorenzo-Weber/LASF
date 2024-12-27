<?php

namespace App\Http\Controllers;

use App\Models\apostasDepositos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class apostasDepositosController extends Controller
{
    public function index () {
        $depositos = apostasDepositos::all();
        $colunas = Schema::getColumnListing((new apostasDepositos())->getTable());

        $colunas = array_diff($colunas, ['updated_at']); 
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('apostas.depositos', compact('depositos', 'colunas'));
    }

    public function store (Request $request) {
        $deposito = new apostasDepositos();
        
        $deposito->fill($request->all());
        $deposito->created_at = now(); 
        
        $deposito->save();
        return redirect()->route('apostasDepositos.index');
    }

    public function update (Request $request, apostasDepositos $deposito) {
        $deposito->fill($request->all());
        $deposito->save();
        return redirect()->route('apostasDepositos.index');
    }

    public function destroy (apostasDepositos $deposito) {
        $deposito->delete();
        return redirect()->route('apostasDepositos.index');
    }
}
