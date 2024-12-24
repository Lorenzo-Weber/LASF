<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroFinanceiro extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroFinanceiroFactory> */
    use HasFactory;

    protected $table = 'financeiro_financeiro';

    protected $fillable = [
        'banco', 
        'tipo', 
        'obs', 
        'conta', 
        'obsConta', 
        'valor'
    ];
}
