<?php

namespace App\Http\Controllers;

use App\Models\financeiroLimitadas;
use Illuminate\Http\Request;

class financeiroLimitadasController extends Controller
{
    public function index () {
        $limitadas = financeiroLimitadas::all();

        return view('financeiro.limitadas', compact('limitadas'));
    }
}
