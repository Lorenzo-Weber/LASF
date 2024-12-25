<?php

namespace App\Http\Controllers;

use App\Models\cadastroCasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class cadastroCasaController extends Controller
{
    public function index () {
        $casa = cadastroCasa::all();

        return view('cadCasa', compact('casa'));
    }
}
