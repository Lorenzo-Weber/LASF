<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroDepositos extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroDepositosFactory> */
    use HasFactory;

    protected $table = 'financeiro_depositos';

    protected $fillable = [
        'banco', 
        'responsavel', 
        'conta', 
        'casa', 
        'valor'
    ];
}
