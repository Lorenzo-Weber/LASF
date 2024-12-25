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
}
