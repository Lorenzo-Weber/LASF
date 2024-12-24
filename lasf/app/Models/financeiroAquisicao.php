<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroAquisicao extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroAquisicaoFactory> */
    use HasFactory;

    protected $table = 'financeiro_aquisicao';

    protected $fillable = [
        'nome', 
        'casa', 
        'operador', 
        'vendedor', 
        'obs', 
        'preco', 
        'pago', 
        'saldoIni', 
        'saldoFim'
    ];

}
