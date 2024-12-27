<?php

namespace App\Http\Controllers;

use App\Models\financeiroCadastroBanco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class financeiroCadastroBancoController extends Controller
{
    public function index () {
        $cadastroBanco = financeiroCadastroBanco::all();
        $colunas = Schema::getColumnListing((new financeiroCadastroBanco())->getTable());

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);


        return view('financeiro.cadastroBanco', compact('cadastroBanco', 'colunas'));
    }

    public function store(Request $request) {
        $cadastroBanco = new financeiroCadastroBanco();

        $cadastroBanco->fill($request->all());
        $cadastroBanco->created_at = now();

        $cadastroBanco->save();
        return redirect()->route('financeiroCadastroBanco.index');
    }

    public function update (Request $request, financeiroCadastroBanco $cadastroBanco) {
        $cadastroBanco->fill($request->all());
        $cadastroBanco->save();
        return redirect()->route('financeiroCadastroBanco.index');
    }

    public function destroy (financeiroCadastroBanco $cadastroBanco) {
        $cadastroBanco->delete();
        return redirect()->route('financeiroCadastroBanco.index');
    }
}
