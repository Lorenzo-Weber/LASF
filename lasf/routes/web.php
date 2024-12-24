<?php

// CONTROLLERS
use App\Http\Controllers\apostasApostasController;
use App\Http\Controllers\apostasContasController;
use App\Http\Controllers\apostasDepositosController;
use App\Http\Controllers\apostasResultadosController;
use App\Http\Controllers\financeiroAquisicaoController;
use App\Http\Controllers\financeiroCadastrosController;
use App\Http\Controllers\financeiroCadastroBancoController;
use App\Http\Controllers\financeiroDepositosController;
use App\Http\Controllers\financeiroFinanceiroController;
use App\Http\Controllers\financeiroLimitadasController;
use App\Http\Controllers\financeiroSaquesController;
use App\Http\Controllers\cadastroCasaController;
use App\Http\Controllers\cadastroUserController;

use Illuminate\Support\Facades\Route;

// LOGIN

Route::get('/', function () {
    return view('home');
});


// FINANCEIRO

Route::get('/financeiro', [financeiroFinanceiroController::class, 'index'])->name('financeiro.index');
Route::get('financeiro/saques', [financeiroSaquesController::class, 'index'])->name('financeiro.saques');
Route::get('financeiro/depositos', [financeiroDepositosController::class, 'index'])->name('financeiro.depositos');
Route::get('financeiro/limitadas', [financeiroLimitadasController::class, 'index'])->name('financeiro.limitadas');
Route::get('financeiro/aquisicao', [financeiroAquisicaoController::class, 'index'])->name('financeiro.aquisicao');
Route::get('financeiro/cadastros', [financeiroCadastrosController::class, 'index'])->name('financeiro.cadastros');
Route::get('financeiro/cadastroBanco', [financeiroCadastroBancoController::class, 'index'])->name('financeiro.cadastroBanco');

// APOSTAS

Route::get('/apostas', [apostasApostasController::class, 'index'])->name('apostas.index');
Route::get('apostas/contas', [apostasContasController::class, 'index'])->name('apostas.contas');
Route::get('apostas/depositos', [apostasDepositosController::class, 'index'])->name('apostas.depositos');
Route::get('apostas/resultados', [apostasResultadosController::class, 'index'])->name('apostas.resultados');

// HOME

Route::get('cadastrar/casa', [cadastroCasaController::class, 'index'])->name('cadCasa');
Route::get('cadastrar/user', [cadastroUserController::class, 'index'])->name('cadUser');