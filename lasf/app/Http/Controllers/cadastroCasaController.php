<?php

namespace App\Http\Controllers;

use App\Models\cadastroCasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class cadastroCasaController extends Controller
{
    public function index () {
        $casas = cadastroCasa::all();
        $colunas = Schema::getColumnListing('cadastro_casa');
    
        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);
    
        return view('cadCasa', compact('casas', 'colunas'));
    }
    

    public function store(Request $request) {
        $casa = new cadastroCasa();
        
        $casa->fill($request->all());
        $casa->created_at = now(); 
        
        $casa->save();
        return redirect()->route('casa.index');
    }
    

    public function update (Request $request, cadastroCasa $casa) {
        $casa->fill($request->all());
        $casa->save();
        return redirect()->route('casa.index');
    }

    public function destroy (cadastroCasa $casa) {
        $casa->delete();
        return redirect()->route('casa.index');
    }
}
