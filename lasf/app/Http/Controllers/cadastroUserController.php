<?php

namespace App\Http\Controllers;

use App\Models\cadastroUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class cadastroUserController extends Controller
{
    public function index () {
        $user = cadastroUser::all();

        $colunas = Schema::getColumnListing('cadastro_user');

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('cadUser', compact('user', 'colunas'));
    }

    public function store(Request $request) {
        $user = new cadastroUser();
        
        $user->fill($request->all());
        $user->created_at = now(); 
        
        $user->save();
        return redirect()->route('user.index');
    }

    public function update (Request $request, cadastroUser $user) {
        $user->fill($request->all());
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy (cadastroUser $user) {
        $user->delete();
        return redirect()->route('user.index');
    }
}
