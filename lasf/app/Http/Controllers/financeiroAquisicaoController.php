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

    public function store(Request $request) {
        $aquisicao = new financeiroAquisicao();
        $aquisicao->fill($request->all());
        $aquisicao->created_at = now();
        $aquisicao->save();

        return redirect()->route('financeiroAquisicao.index');
    }

    public function update(Request $request, financeiroAquisicao $aquisicao) {
        $aquisicao->fill($request->all());
        $aquisicao->created_at = now();
        $aquisicao->save();

        return redirect()->route('financeiroAquisicao.index');
    }

    public function destroy(financeiroAquisicao $aquisicao) {
        $aquisicao->delete();
        return redirect()->route('financeiroAquisicao.index');
    }
}
