<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroLimitadas extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroLimitadasFactory> */
    use HasFactory;

    protected $table = 'financeiro_limitadas';

    protected $fillable = [
        'conta', 
        'casa', 
        'responsavel', 
        'vendedor', 
        'saldoFim', 
        'Em_saque', 
        'sacado', 
        'pagoCasa', 
        'saldoRestante'
    ];
}
