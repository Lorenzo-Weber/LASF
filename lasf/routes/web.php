<?php

// CONTROLLERS
use App\Http\Controllers\apostasApostasController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApostaApostaController;

// LOGIN

Route::get('/', function () {
    return view('home');
});


// FINANCEIRO

Route::get('/financeiro', function () {
    return view('financeiro.financeiro');
});

Route::get('financeiro/saques', function () {
    return view('financeiro.saques');
});

Route::get('financeiro/depositos', function () {
    return view('financeiro.depositos');
});

Route::get('financeiro/limitadas', function () {
    return view('financeiro.limitadas');
});

Route::get('financeiro/aquisicao', function () {
    return view('financeiro.aquisicao');
});

Route::get('financeiro/cadastros', function () {
    return view('financeiro.cadastros');
});

Route::get('financeiro/cadastroBanco', function () {
    return view('financeiro.cadastroBanco');
});

// APOSTAS

Route::get('/apostas', [apostasApostasController::class, 'index'])->name('apostas.index');

// Route::get('/apostas', function () {
//     return view('apostas.apostas');
// });

Route::get('apostas/contas', function () {
    return view('apostas.contas');
});

Route::get('apostas/depositos', function () {
    return view('apostas.depositos');
});

Route::get('apostas/resultados', function () {
    return view('apostas.resultados');
});

// HOME

Route::get('cadastrar/casa', function () {
    return view('cadCasa');
});

Route::get('cadastrar/user', function () {
    return view('cadUser');
});