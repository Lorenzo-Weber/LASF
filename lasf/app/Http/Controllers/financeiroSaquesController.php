<?php

namespace App\Http\Controllers;

use App\Models\financeiroSaques;
use Illuminate\Http\Request;

class financeiroSaquesController extends Controller
{
    public function index () {
        $saques = financeiroSaques::all();

        return view('financeiro.saques', compact('saques'));
    }
}
