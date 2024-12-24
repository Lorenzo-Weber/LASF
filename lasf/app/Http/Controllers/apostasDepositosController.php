<?php

namespace App\Http\Controllers;

use App\Models\apostasDepositos;
use Illuminate\Http\Request;

class apostasDepositosController extends Controller
{
    public function index () {
        $depositos = apostasDepositos::all();

        return view('apostas.depositos', compact('depositos'));
    }
}
