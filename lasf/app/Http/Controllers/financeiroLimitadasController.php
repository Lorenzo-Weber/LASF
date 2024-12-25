<?php

namespace App\Http\Controllers;

use App\Models\financeiroLimitadas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroLimitadasController extends Controller
{
    public function index () {
        $limitadas = financeiroLimitadas::all();
        $colunas = Schema::getColumnListing((new financeiroLimitadas())->getTable());

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.limitadas', compact('limitadas', 'colunas'));
    }
}
