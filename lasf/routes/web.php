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
use App\Http\Controllers\cadastroAdminController;

use Illuminate\Support\Facades\Route;

// LOGIN

Route::get('/', function () {
    return view('home');
});

// FINANCEIRO

Route::get('/financeiro', [financeiroFinanceiroController::class, 'index'])->name('financeiroFinanceiro.index');
Route::post('/financeiro', [financeiroFinanceiroController::class, 'store'])->name('financeiroFinanceiro.store');
Route::put('/financeiro/{financeiro}', [financeiroFinanceiroController::class, 'update'])->name('financeiroFinanceiro.update');
Route::delete('/financeiro/{financeiro}', [financeiroFinanceiroController::class, 'destroy'])->name('financeiroFinanceiro.destroy');

Route::get('financeiro/saques', [financeiroSaquesController::class, 'index'])->name('financeiroSaques.index');
Route::post('financeiro/saques', [financeiroSaquesController::class, 'store'])->name('financeiroSaques.store');
Route::put('/financeiro/saques/{saque}', [financeiroSaquesController::class, 'update'])->name('financeiroSaques.update');
Route::delete('/financeiro/saques/{saque}', [financeiroSaquesController::class, 'destroy'])->name('financeiroSaques.destroy');

Route::get('financeiro/depositos', [financeiroDepositosController::class, 'index'])->name('financeiroDepositos.index');
Route::post('financeiro/depositos', [financeiroDepositosController::class, 'store'])->name('financeiroDepositos.store');
Route::put('/financeiro/depositos/{deposito}', [financeiroDepositosController::class, 'update'])->name('financeiroDepositos.update');
Route::delete('/financeiro/depositos/{deposito}', [financeiroDepositosController::class, 'destroy'])->name('financeiroDepositos.destroy');

Route::get('financeiro/limitadas', [financeiroLimitadasController::class, 'index'])->name('financeiroLimitadas.index');
Route::post('financeiro/limitadas', [financeiroLimitadasController::class, 'store'])->name('financeiroLimitadas.store');
Route::put('/financeiro/limitadas/{limitada}', [financeiroLimitadasController::class, 'update'])->name('financeiroLimitadas.update');
Route::delete('/financeiro/limitadas/{limitada}', [financeiroLimitadasController::class, 'destroy'])->name('financeiroLimitadas.destroy');

Route::get('financeiro/aquisicao', [financeiroAquisicaoController::class, 'index'])->name('financeiroAquisicao.index');
Route::post('financeiro/aquisicao', [financeiroAquisicaoController::class, 'store'])->name('financeiroAquisicao.store');
Route::put('/financeiro/aquisicao/{aquisicao}', [financeiroAquisicaoController::class, 'update'])->name('financeiroAquisicao.update');
Route::delete('/financeiro/aquisicao/{aquisicao}', [financeiroAquisicaoController::class, 'destroy'])->name('financeiroAquisicao.destroy');

Route::get('financeiro/cadastros', [financeiroCadastrosController::class, 'index'])->name('financeiroCadastros.index');
Route::post('financeiro/cadastros', [financeiroCadastrosController::class, 'store'])->name('financeiroCadastros.store');
Route::put('/financeiro/cadastros/{cadastro}', [financeiroCadastrosController::class, 'update'])->name('financeiroCadastros.update');
Route::delete('/financeiro/cadastros/{cadastro}', [financeiroCadastrosController::class, 'destroy'])->name('financeiroCadastros.destroy');

Route::get('financeiro/cadastroBanco', [financeiroCadastroBancoController::class, 'index'])->name('financeiroCadastroBanco.index');
Route::post('financeiro/cadastroBanco', [financeiroCadastroBancoController::class, 'store'])->name('financeiroCadastroBanco.store');
Route::put('/financeiro/cadastroBanco/{cadastroBanco}', [financeiroCadastroBancoController::class, 'update'])->name('financeiroCadastroBanco.update');
Route::delete('/financeiro/cadastroBanco/{cadastroBanco}', [financeiroCadastroBancoController::class, 'destroy'])->name('financeiroCadastroBanco.destroy');

// APOSTAS

Route::get('/apostas', [apostasApostasController::class, 'index'])->name('apostasApostas.index');
Route::post('/apostas', [apostasApostasController::class, 'store'])->name('apostasApostas.store');
Route::put('/apostas/{aposta}', [apostasApostasController::class, 'update'])->name('apostasApostas.update');
Route::delete('/apostas/{aposta}', [apostasApostasController::class, 'destroy'])->name('apostasApostas.destroy');

Route::get('apostas/contas', [apostasContasController::class, 'index'])->name('apostasContas.index');
Route::post('apostas/contas', [apostasContasController::class, 'store'])->name('apostasContas.store');
Route::put('/apostas/contas/{conta}', [apostasContasController::class, 'update'])->name('apostasContas.update');
Route::delete('/apostas/contas/{conta}', [apostasContasController::class, 'destroy'])->name('apostasContas.destroy');

Route::get('apostas/depositos', [apostasDepositosController::class, 'index'])->name('apostasDepositos.index');
Route::post('apostas/depositos', [apostasDepositosController::class, 'store'])->name('apostasDepositos.store');
Route::put('/apostas/depositos/{deposito}', [apostasDepositosController::class, 'update'])->name('apostasDepositos.update');
Route::delete('/apostas/depositos/{deposito}', [apostasDepositosController::class, 'destroy'])->name('apostasDepositos.destroy');

Route::get('apostas/resultados', [apostasResultadosController::class, 'index'])->name('apostasResultados.index');
Route::post('apostas/resultados', [apostasResultadosController::class, 'store'])->name('apostasResultados.store');
Route::put('/apostas/resultados/{resultado}', [apostasResultadosController::class, 'update'])->name('apostasResultados.update');
Route::delete('/apostas/resultados/{resultado}', [apostasResultadosController::class, 'destroy'])->name('apostasResultados.destroy');

// HOME

Route::get('cadastrar/casa', [cadastroCasaController::class, 'index'])->name('casa.index');
Route::post('cadastrar/casa', [cadastroCasaController::class, 'store'])->name('casa.store');
Route::put('/cadatrar/casa/{casa}', [cadastroCasaController::class, 'update'])->name('casa.update');
Route::delete('/cadatrar/casa/{casa}', [cadastroCasaController::class, 'destroy'])->name('casa.destroy');

Route::get('cadastrar/user', [cadastroUserController::class, 'index'])->name('user.index');
Route::post('cadastrar/user', [cadastroUserController::class, 'store'])->name('user.store');
Route::put('/cadatrar/user/{user}', [cadastroUserController::class, 'update'])->name('user.update');
Route::delete('/cadatrar/user/{user}', [cadastroUserController::class, 'destroy'])->name('user.destroy');