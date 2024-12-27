<?php

namespace App\Http\Controllers;

use App\Models\apostasApostas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class apostasApostasController extends Controller
{
    public function index () {    
        $apostas = apostasApostas::all();
        $colunas = Schema::getColumnListing((new apostasApostas())->getTable());

        $colunas = array_diff($colunas, ['updated_at']); 
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('apostas.apostas', compact('apostas', 'colunas'));
    }

    public function store(Request $request) {
        $aposta = new apostasApostas();
        
        $aposta->fill($request->all());
        $aposta->created_at = now(); 
        
        $aposta->save();
        return redirect()->route('apostasApostas.index');
    }

    public function update (Request $request, apostasApostas $aposta) {
        $aposta->fill($request->all());
        $aposta->save();
        return redirect()->route('apostasApostas.index');
    }

    public function destroy (apostasApostas $aposta) {
        $aposta->delete();
        return redirect()->route('apostasApostas.index');
    }
}
