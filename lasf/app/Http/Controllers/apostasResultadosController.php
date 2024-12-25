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
}
