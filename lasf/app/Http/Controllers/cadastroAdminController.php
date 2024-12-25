<?php

namespace App\Http\Controllers;

use App\Models\cadastroAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class cadastroAdminController extends Controller
{
    public function index() {
        $admins = cadastroAdmin::all();

        $colunas = Schema::getColumnListing('cadastro_admin');

        $colunas = array_diff($colunas, ['updated_at']);
        $colunas = array_map(function ($column) {
            return $column == 'created_at' ? 'data' : $column;
        }, $colunas);

        return view('cadAdmin', compact('admins', 'colunas'));
    }
}
