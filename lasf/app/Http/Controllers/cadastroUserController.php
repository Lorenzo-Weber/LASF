<?php

namespace App\Http\Controllers;

use App\Models\cadastroUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class cadastroUserController extends Controller
{
    public function index () {
        $user = cadastroUser::all();

        return view('cadUser', compact('user'));
    }
}
