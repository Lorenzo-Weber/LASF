<?php

namespace App\Http\Controllers;

use App\Models\apostasContas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class apostasContasController extends Controller
{
    public function index () {
        $contas = apostasContas::all();
        $colunas = Schema::getColumnListing((new apostasContas())->getTable());

        $colunas = array_diff($colunas, ['updated_at']); 
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('apostas.contas', compact('contas', 'colunas'));
    }

    public function store(Request $request) {
        $conta = new apostasContas();
        
        $conta->fill($request->all());
        $conta->created_at = now(); 
        
        $conta->save();
        return redirect()->route('apostasContas.index');
    }

    public function update (Request $request, apostasContas $conta) {
        $conta->fill($request->all());
        $conta->save();
        return redirect()->route('apostasContas.index');
    }

    public function destroy (apostasContas $conta) {
        $conta->delete();
        return redirect()->route('apostasContas.index');
    }
}
