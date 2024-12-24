<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroCadastroBanco extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroCadastroBancoFactory> */
    use HasFactory;

    protected $table = 'financeiro_cadastroBanco';

    protected $fillable = [
        'nome', 
        'nick', 
        'cpf', 
        'senhaLogin', 
        'senhaTransacao', 
        'agente', 
        'codigo', 
        'status1', 
        'status2', 
        'saldo'
    ];
}
