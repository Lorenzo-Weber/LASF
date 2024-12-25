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
}
