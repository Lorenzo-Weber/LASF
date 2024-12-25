<?php

namespace App\Http\Controllers;

use App\Models\cadastroCasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class cadastroCasaController extends Controller
{
    public function index () {
        $casa = cadastroCasa::all();

        $colunas = Schema::getColumnListing('cadastro_casa');

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('cadCasa', compact('casa', 'colunas'));
    }
}
