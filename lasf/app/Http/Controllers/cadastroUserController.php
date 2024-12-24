<?php

namespace App\Http\Controllers;

use App\Models\cadastroUser;
use Illuminate\Http\Request;

class cadastroUserController extends Controller
{
    public function index () {
        $user = cadastroUser::all();

        return view('cadUser', compact('user'));
    }
}
