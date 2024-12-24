<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroSaques extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroSaquesFactory> */
    use HasFactory;

    protected $table = 'financeiro_saques';

    protected $fillable = [
        'banco', 
        'responsavel', 
        'conta', 
        'casa', 
        'valor', 
        'status'
    ];
}
