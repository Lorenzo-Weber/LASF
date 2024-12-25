<?php

namespace App\Http\Controllers;

use App\Models\financeiroCadastros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroCadastrosController extends Controller
{
    public function index () {
        $cadastro = financeiroCadastros::all();
        $colunas = Schema::getColumnListing((new financeiroCadastros())->getTable());

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('financeiro.cadastros', compact('cadastro', 'colunas'));
    }
}
