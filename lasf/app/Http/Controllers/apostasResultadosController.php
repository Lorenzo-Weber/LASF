<?php

namespace App\Http\Controllers;

use App\Models\apostasResultados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class apostasResultadosController extends Controller
{
    public function index () {
        $resultados = apostasResultados::all();
        $colunas = Schema::getColumnListing((new apostasResultados())->getTable());

        $colunas = array_diff($colunas, ['updated_at']); 
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('apostas.resultados', compact('resultados', 'colunas'));
    }

    public function store (Request $request) {
        $resultado = new apostasResultados();
        
        $resultado->fill($request->all());
        $resultado->created_at = now(); 
        
        $resultado->save();
        return redirect()->route('apostasResultados.index');
    }

    public function update (Request $request, apostasResultados $resultado) {
        $resultado->fill($request->all());
        $resultado->save();
        return redirect()->route('apostasResultados.index');
    }

    public function destroy (apostasResultados $resultado) {
        $resultado->delete();
        return redirect()->route('apostasResultados.index');
    }
}
