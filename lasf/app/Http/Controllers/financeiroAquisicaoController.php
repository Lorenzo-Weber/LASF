<?php

namespace App\Http\Controllers;

use App\Models\financeiroAquisicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroAquisicaoController extends Controller
{
    public function index () {
        $aquisicao = financeiroAquisicao::all();
        $colunas = Schema::getColumnListing((new financeiroAquisicao())->getTable());

        $colunas = array_diff($colunas, ['updated_at']); 
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.aquisicao', compact('aquisicao', 'colunas'));
    }
}
