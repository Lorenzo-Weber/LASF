<?php

namespace App\Http\Controllers;

use App\Models\cadastroCasa;
use Illuminate\Http\Request;

class cadastroCasaController extends Controller
{
    public function index () {
        $casa = cadastroCasa::all();

        return view('cadCasa', compact('casa'));
    }
}
