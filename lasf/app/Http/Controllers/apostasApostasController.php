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
}
